<script setup>
import {ref, onMounted} from 'vue';
import { useAuthStore } from '@/stores/useAuthStore.js';
import useAxios from '@/composables/useAxios';
import {useRouter} from 'vue-router';
import {useRoute} from 'vue-router';
import { toast } from 'vue3-toastify';

const {error, loading, sendRequest} = useAxios();
const authStore = useAuthStore();
const router = useRouter();
const route = useRoute();

const getArea = async() => {
    const response = await sendRequest({
        method:'get',
        url:`/v1/shipping-area/${route.params.id}`,
        headers: {
            authorization: `Bearer ${authStore.user.token}`,
        }
    });
    form.value.id = response.data.id;
    form.value.name = response.data.name;
    form.value.area_code = response.data.area_code;
    form.value.status = response.data.status;
    form.value.condition_charge = response.data.condition_charge;
    form.value.condition_price = response.data.condition_price;
    form.value.delevery_charge = response.data.delevery_charge;
}

const form = ref({
    id:null,
    name:null,
    area_code:null,
    condition_charge:null,
    condition_price:null,
    delevery_charge:null,
    status: ''
})

const onUpdate = async(id) => {
    const response = await sendRequest({
        method:'post',
        url:`/v1/shipping-area/${id}`,
        headers:{
            authorization: `Bearer ${authStore.user.token}`,
        },
        params:{
            _method: 'PUT'
        },
        data:form.value
    })

    if(response){
        toast.success('Shipping Area Updated Succesfully', {autoClose:1000})
        router.push('/shipping')
    }
}

onMounted(() => {
    getArea();
})
</script>
<template>
    <AppLayout>
        <div class="w-full max-w-2xl bg-white mx-auto shadow-lg p-4">
            <h3>Add new shipping area</h3>
            <div class="flex flex-col gap-3">
                <div class="flex">
                    <div class="w-full lg:w-1/2 pr-2">
                        <label for="name" class="text-sm text-gray-600 mb-1">Area Name</label>
                        <input id="name" type="text" class="p-2 rounded-md border w-full" v-model="form.name">
                    </div>
                    <div class="w-full lg:w-1/2  pl-2">
                        <label for="area-code" class="text-sm text-gray-600 mb-1">Area Code</label>
                        <input id="area-code" type="number" class="p-2 rounded-md border w-full" v-model="form.area_code">
                    </div>
                </div>
                <div class="flex">
                    <div class="w-full lg:w-1/2 pr-2">
                        <label for="condition-charge" class="text-sm text-gray-600 mb-1">Condition Charge</label>
                        <input id="condition-charge" type="number" class="p-2 rounded-md border w-full" v-model="form.condition_charge">
                    </div>
                    <div class="w-full lg:w-1/2  pl-2">
                        <label for="condition-price" class="text-sm text-gray-600 mb-1">Condition Price</label>
                        <input id="condition-price" type="number" class="p-2 rounded-md border w-full" v-model="form.condition_price">
                    </div>
                </div>
                <div class="flex">
                    <div class="w-full lg:w-1/2 pr-2">
                        <label for="delevery-charge" class="text-sm text-gray-600 mb-1">Delevery Charge</label>
                        <input id="delevery-charge" type="number" class="p-2 rounded-md border w-full" v-model="form.delevery_charge">
                    </div>
                    <div class="w-full lg:w-1/2  pl-2">
                        <div class="w-full">
                            <label for="delevery-charge" class="text-sm text-gray-600 mb-1">Status</label>
                            <div class="flex items-center gap-2">
                                <div class="checkbox">
                                    <input type="checkbox"  id="status" class="hidden" v-model="form.status" :checked="form.status === 1"> 
                                    <label for="status">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-5">
                    <Button class="w-full rounded" @click='onUpdate(form.id)'>Update Sipping</Button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>