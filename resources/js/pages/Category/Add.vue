<script setup>
import Editor from "@/components/Editor.vue";
import useAxios from "@/composables/useAxios"
import { useAuthStore } from "@/stores/useAuthStore";
import { toast } from "vue3-toastify";
import { ref, onMounted } from "vue";
import { useRouter} from 'vue-router'
const { loading, error, sendRequest } = useAxios();
const authStore = useAuthStore(); 
const router = useRouter();

const parentCategories = ref(null);
const getParentCategory = async() => {
    const response = await sendRequest({
        method:'get',
        url: '/v1/parent-category',
        headers: {
            authorization: `Bearer ${authStore.user.token}`,
        }
    });
    parentCategories.value = response?.data;
}

const iconImg = ref(null);
const bannerImg = ref(null);

const form = ref({
    name: null,
    parent_id: 0,
    icon: null,
    banner: null,
    status:'active',
    order_number: null,
    description: null,
});


const banner = (banner) => {
    const file = banner.target.files[0];
    form.value.banner = file;
    bannerImg.value = URL.createObjectURL(file);
}
const image = (image) => {
    const file = image.target.files[0];
    form.value.icon = file;
    iconImg.value = URL.createObjectURL(file);
}

const onSubmit = async() => {
    const response = await sendRequest({
        method: 'post',
        url: '/v1/category',
        data: form.value,
        headers: {
            authorization: `Bearer ${authStore.user.token}`,
            'Content-Type': 'multipart/form-data'
        }
    });

    console.log(response?.data);
    if(response?.data){
        toast.success( `${response?.data?.name} Category Addded Succesfully`, {autoclose:1000});
        await router.push('/category');
    }
}



onMounted(() => {
    getParentCategory()
})
</script>
<template>
    <AppLayout>
        <div class="bg-white shadow-md p-6 max-w-5xl mx-auto">
            <h3 class="mb-10">Create a New Category</h3>
            <div>
                <div class="flex items-center flex-wrap">
                    <div class="w-1/2 pr-2">
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Category Name</label>
                            <input v-model="form.name" type="text" class="border border-primary rounded-md font-normal text-sm w-full">
                        </div>
                    </div>
                    
                    <div class="w-1/2 pl-2">
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Parent Category</label>
                            <Select
                            v-if="parentCategories"
                            label="name"
                            :options="parentCategories"
                            >
                                
                            </Select>
                            <p v-else class="text-primary">Faield To load Parent Category...</p>
                        </div>
                    </div>
                    <div class="w-1/2 pr-2 pt-2">
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Order Number</label>
                            <input v-model="form.order_number" type="number" class="border border-primary rounded-md font-normal text-sm w-full">
                        </div>
                    </div>
                    <div class="w-1/2 pl-2 pt-2">
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Category Status</label>
                            <div class="flex items-center gap-2">
                                <span class="text-sm">Inactive</span>
                                <div class="checkbox">
                                    <input type="checkbox"  id="status" class="hidden"> 
                                    <label for="status">
                                        <span></span>
                                    </label>
                                </div>
                                <span class="text-sm">Active</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="flex items-center my-10">
                    <div class="w-1/3 pr-2">
                        <div class="w-full">
                            <label for="category-icon" class="text-sm block mb-2">Category Image</label>
                            <label class="border border-primary border-dashed p-4 rounded-2xl flex items-center justify-center w-full h-52 cursor-pointer">
                                <img v-if="iconImg" :src="iconImg" class="w-full h-full">
                                <div v-if="!iconImg" class="flex flex-col items-center justify-center gap-2">
                                    <Icon name="tabler:cloud-upload" class="text-primary text-5xl opacity-85" />
                                    <span class="text-primary font-semibold opacity-85">Upload Category Icon</span>
                                </div>
                                <input id="category-icon" @change="image" type="file" hidden>
                            </label>
                        </div>
                    </div>
                    <div class="w-2/3 pl-2">
                        <div class="w-full">
                            <label for="category-banner" class="text-sm block mb-2">Category Banner</label>
                            <label for="category-banner" class="border border-primary border-dashed p-4 rounded-2xl flex items-center justify-center w-full h-52 cursor-pointer">
                                <img v-if="bannerImg" :src="bannerImg" class="w-full h-full rounded-md">
                                <div v-if="!bannerImg" class="flex flex-col items-center justify-center gap-2">
                                    <Icon name="tabler:cloud-upload" class="text-primary text-5xl opacity-85" />
                                    <span class="text-primary font-semibold opacity-85">Upload Category Banner</span>
                                </div>
                                <input id="category-banner" @change="banner" type="file" hidden>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <Editor  />
                </div>
                <div v-html="form.description"></div>
            </div>
            <div class="mt-5">
                <Button @click="onSubmit">Save Category</Button>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>