
<script setup>
import {ref} from 'vue';
import { useAuthStore } from '@/stores/useAuthStore.js';
import useAxios from '@/composables/useAxios';
import { toast } from 'vue3-toastify';
import { useRouter } from 'vue-router';

const router = useRouter();
const authStore = useAuthStore(); 
const {loadin, error, sendRequest} = useAxios();


const sliderImg = ref(null);
const image = (image) => {
    const file = image.target.files[0];
    form.value.image = file;
    sliderImg.value = URL.createObjectURL(file);
}

const form = ref({
    url:null,
    image:null,
    status:true,
    order_number:null
})

const onSubmit = async() => {
    const response = await sendRequest({
        url:'/v1/slider',
        method: 'post',
        data:form.value,
        headers: {
            authorization: `Bearer ${authStore.user.token}`,
            'Content-Type': 'multipart/form-data'
        }
    })

    if(response){
        toast.success('Slider Created Successfully');
        router.push('/slider')

    }
}

</script>
<template>
    <AppLayout>
        <div class="bg-white p-4 shadow max-w-3xl mx-auto">
            <h3 class="text-xl mb-5">Add New Home Slider</h3>
            <div class="flex flex-col gap-5">
                <div class="w-full">
                    <label for="url" class="text-sm block mb-1">URL</label>
                    <input type="text" class="p-2 rounded-md border w-full" v-model="form.url">
                </div>
                <div class="w-full flex gap-5">
                    <div>
                        <label for="url" class="text-sm block mb-1">Order Number</label>
                        <input type="number" class="p-2 rounded-md border w-full" v-model="form.order_number">
                    </div>
                    <div>
                        <label for="status" class="mb-1 block text-sm text-gray-600">Status</label>
                        <div class="w-full">
                            <div class="flex items-center gap-2">
                                <div class="checkbox">
                                    <input type="checkbox"  id="status" class="hidden" v-model="form.status"> 
                                    <label for="status">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full">
                    <label for="slider-image" class="text-sm block mb-2">Slider Image</label>
                    <label for="slider-image" class="border border-primary border-dashed p-4 rounded-2xl flex items-center justify-center w-full h-52 cursor-pointer">
                        <img v-if="sliderImg" :src="sliderImg" class="w-full h-full rounded-md">
                        <div v-if="!sliderImg" class="flex flex-col items-center justify-center gap-2">
                            <Icon name="tabler:cloud-upload" class="text-primary text-5xl opacity-85" />
                            <span class="text-primary font-semibold opacity-85">Upload Slider Image</span>
                        </div>
                        <input id="slider-image" @change="image" type="file" hidden>
                    </label>
                </div>
                <div>
                    <button @click="onSubmit" class="bg-primary text-center text-white w-full py-2 rounded">Save Slider</button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>