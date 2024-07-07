import AppLayout from '@/components/Layouts/AppLayout.vue';
<script setup>
    import Editor from '@/components/Editor.vue';
    import { ref, onMounted } from 'vue'
    import  useAxios  from '@/composables/useAxios';
    import { useAuthStore } from "@/stores/useAuthStore";
    import { useRouter } from 'vue-router';

    const { loading, error, sendRequest } = useAxios();
    const authStore = useAuthStore(); 
    const router = useRouter();


    //  get All brands and categories first
    const categories = ref(null);
    const brands = ref(null);

    // categores
    const getCategories = async() => {
        const response = await sendRequest({
            method:'get',
            url:'/v1/get-all-category-list',
            headers: {
                authorization: `Bearer ${authStore.user.token}`,
            }
        }); 
        categories.value = response?.data
    }

    // brands
    const getBrands = async() => {
        const response = await sendRequest({
            method:'get',
            url:'/v1/get-all-brand-list',
            headers: {
                authorization: `Bearer ${authStore.user.token}`,
            }
        }); 
        brands.value = response?.data
    }


    // handle multiple image upload
    const handleFileChange = (event) => {
        for (let i = 0; i < event.target.files.length; i++) {
            form.value.images.push({
                url: URL.createObjectURL(event.target.files[i]),
                file: event.target.files[i],
            });
        }
    };

    const removeMedia = (index) => {
        let removedImage = form.value.images[index];
        if (removedImage.url.startsWith('blob:')) {
            URL.revokeObjectURL(removedImage.url);
        }
        form.value.images.splice(index, 1);
    };
    const form = ref({
        images: []
    })

    onMounted(() => {
        getCategories(); 
        getBrands(); 
    });
</script>
<template>
    <AppLayout>
        <div class="p-4 bg-white shadow-md me-4">
            <h1>Add New Poduct</h1>
            <div class="flex space-x-4">
                <div class="w-1/2 flex flex-col gap-3">
                    <div class="w-full">
                        <label for="title" class="text-sm mb-1">Product Tilte</label>
                        <textarea type="text" class="p-1 border border-primary w-full rounded"></textarea>
                    </div>
                    <div class="w-full flex items-center space-x-3">
                        <div class="w-1/4">
                            <label for="price" class="text-sm">Price</label>
                            <input type="text" class="border border-primary p-2 rounded-md w-full">
                        </div>
                        <div class="w-1/4">
                            <label for="sku" class="text-sm">Sku</label>
                            <input type="text" class="border border-primary p-2 rounded-md w-full">
                        </div>
                        <div class="w-1/4">
                            <label for="discount" class="text-sm">Stock</label>
                            <input type="text" class="border border-primary p-2 rounded-md w-full">
                        </div>
                        <div class="w-1/4">
                            <label for="discount" class="text-sm">Discount</label>
                            <input type="text" class="border border-primary p-2 rounded-md w-full">
                        </div>
                    </div> 
                    <div class="w-full flex items-center space-x-5">
                        <div class="w-1/2">
                            <label for="category" class="text-sm">Category</label>
                            <Select
                                label="name"
                                v-if="categories"
                                :options="categories"
                                searchable
                            ></Select>
                        </div>
                        <div class="w-1/2">
                            <label for="brand" class="text-sm">Brand</label>
                            <Select></Select>
                        </div>
                    </div>   
                    <div class="w-full">
                        <label for="title" class="text-sm mb-1">Video Url (Optional)</label>
                        <textarea type="text" class="p-1 border border-primary w-full rounded"></textarea>
                    </div>
                    <div class="w-full">
                        <label for="title" class="text-sm mb-1">Short Description</label>
                        <Editor />
                    </div>
                </div>
                <div class="w-1/2 flex flex-col gap-4">
                    <div class="flex">
                        <div class="w-1/2 pr-2">
                            <label for="image" class="text-sm block mb-1">Cover Image</label>
                            <label for="cover_image" class="w-full max-w-80 h-72 flex items-center
                            justify-center gap-3 p-2 border border-dashed border-primary rounded-md text-primary cursor-pointer">
                                <input type="file" id="cover_image" hidden>
                                <p>Upload Product Cover Image</p>
                            </label>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="image" class="text-sm block mb-1">Hover Image(Optional)</label>
                            <label for="cover_image" class="flex items-center gap-3 p-2 border border-dashed border-primary rounded-md text-primary cursor-pointer justify-center w-full max-w-80 h-72">
                                <input type="file" id="cover_image" hidden>
                                <p>Upload Product Hover Image</p>
                            </label>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="p-4 bg-white shadow">
                            <h4 class="pb-3">Product Images</h4>
                            <ul style="list-style:disc;" class="ps-4 mb-4">
                                <li>999 KB limit.</li>
                                <li>Allowed types: <span class="primary-color"> JPG</span>, <span class="primary-color">JPEG</span>, <span class="primary-color">PNG</span>.</li>
                            </ul>
                            <div class="file-upload-container">
                                <div class="file-upload-container-wrapper">
                                    <!--IMAGES PREVIEW-->
                                    <div v-for="(image, index) in form.images"   class="file-upload-container-wrapper__preview" :key="image.index">
                                        <img :src="image.url" class="file-upload-container-wrapper__preview-item">
                                        <button @click="removeMedia(index)"  class="file-upload-container-wrapper__preview-cancel" type="button">
                                            <Icon name="material-symbols:close" />
                                        </button>
                                    </div>
                                    <!--UPLOAD BUTTON-->
                                    <div class="file-upload-container-wrapper__add">
                                        <label for="mu-file-input" class="file-upload-container__add-btn">
                                            <span>
                                                <Icon name="tabler:cloud-upload" />
                                            </span>
                                        </label>
                                        <input @change="handleFileChange" id="mu-file-input" type="file" accept="image/*" multiple hidden>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div  class="p-4 bg-white shadow-md me-4 mt-5">
            <div class="w-full">
                <label for="title" class="text-sm mb-1">Product Description</label>
                <Editor />
            </div>
        </div>
        <div  class="p-4 bg-white shadow-md me-4 mt-5">
            <div class="w-full">
                <label for="title" class="text-sm mb-1">Product Spacification</label>
                <Editor />
            </div>
        </div>
    </AppLayout>
</template>