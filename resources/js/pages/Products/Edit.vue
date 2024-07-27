import AppLayout from '@/components/Layouts/AppLayout.vue';
<script setup>
    import Editor from '@/components/Editor.vue';
    import { ref, onMounted } from 'vue'
    import  useAxios  from '@/composables/useAxios';
    import { useAuthStore } from "@/stores/useAuthStore";
    import { useRouter } from 'vue-router';
    import { useRoute } from 'vue-router';
    import { toast } from "vue3-toastify";

    const { loading, error, sendRequest } = useAxios();
    const authStore = useAuthStore(); 
    const router = useRouter();
    const route = useRoute();

    const product = ref(null);

    const getProduct = async() => {
        const reaponse = await sendRequest({
            method:'get',
            url:`/v1/product/${route.params.slug}`,
            headers: {
                authorization: `Bearer ${authStore.user.token}`,
            }
        });

        product.value = reaponse.data;
    }


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


    //handle cover image
    const coverImg = ref(null);
    const coverImage = (image) => {
        const file = image.target.files[0];
        form.value.cover_image = file;
        coverImg.value = URL.createObjectURL(file);
    }

    // handle hover image
    const hoverImg = ref(null);
    const hoverImage = (image) => {
        const file = image.target.files[0];
        form.value.hover_image = file;
        hoverImg.value = URL.createObjectURL(file);
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
    console.log(product.value);
    const form = ref({
        title: product?.value?.title,
        price: product?.value?.title,
        category_id: product?.value?.category_id,
        brand_id: product?.value?.category_id,
        status: 1,
        video_url: product?.value?.category_id,
        sku: null,
        cover_image: null,
        hover_image: null,
        images: []
    });

    

    // Save Product
    const onSubmit = async() => {
        const response = await sendRequest({
            method: 'post',
            url: '/v1/product',
            data: form.value,
            headers: {
                authorization: `Bearer ${authStore.user.token}`,
                'Content-Type': 'multipart/form-data'
            }
        });
        if(response?.data){
            toast.success( `${response?.data?.name} Product Addded Succesfully`, {autoclose:1000});
            await router.push('/products');
        }
    }

    onMounted(() => {
        getProduct();
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
                        <textarea type="text" class="p-1 border border-primary w-full rounded" v-model="form.title"></textarea>
                    </div>
                    <div class="w-full flex items-center space-x-3">
                        <div class="w-1/4">
                            <label for="price" class="text-sm">Price</label>
                            <input type="text" class="border border-primary p-2 rounded-md w-full" v-model="form.price">
                        </div>
                        <div class="w-1/4">
                            <label for="sku" class="text-sm">Sku</label>
                            <input type="text" class="border border-primary p-2 rounded-md w-full" v-model="form.sku">
                        </div>
                        <div class="w-1/4">
                            <label for="discount" class="text-sm">Stock</label>
                            <input type="text" class="border border-primary p-2 rounded-md w-full">
                        </div>
                        <div class="w-1/4">
                            <label for="discount" class="text-sm">Discount</label>
                            <input type="text" class="border border-primary p-2 rounded-md w-full" v-model="form.discount">
                        </div>
                    </div> 
                    <div class="w-full flex items-center space-x-5">
                        <div class="w-1/2">
                            <label for="category" class="text-sm">Category</label>
                            <Select
                                label="name"
                                v-if="categories"
                                :options="categories"
                                :reduce="item => item.id"
                                :searchable="true"
                                v-model="form.category_id"
                                placeholder="Set Category"
                            >
                            <template v-slot:option="option">
                                <li class="flex items-start py-1">
                                    <div class="flex items-center justify-between w-full">
                                        <div class="me-1 flex items-center gap-2">
                                            <img :src="option?.icon" class="w-12 h-12">
                                            <h6 class="mb-25">{{ option?.name }}</h6>
                                        </div>
                                    </div>
                                </li>
                            </template>
                            </Select>
                        </div>
                        <div class="w-1/2">
                            <label for="brand" class="text-sm">Brand</label>
                            <Select
                            label="name"
                                v-if="brands"
                                :options="brands"
                                :reduce="item => item.id"
                                :searchable="true"
                                placeholder="Set Brand"
                                v-model="form.brand_id"
                            >
                            <template v-slot:option="option">
                                <li class="flex items-start py-1">
                                    <div class="flex items-center justify-between w-full">
                                        <div class="me-1 flex items-center gap-2">
                                            <img :src="option?.logo" class="w-12 h-12">
                                            <h6 class="mb-25">{{ option?.name }}</h6>
                                        </div>
                                    </div>
                                </li>
                            </template>
                        </Select>
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
                                <input type="file" id="cover_image" hidden @change="coverImage">
                                <img v-if="coverImg" :src="coverImg" alt="">
                                <div v-else>
                                    <p>Upload Product Cover Image</p>
                                </div>
                            </label>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="image" class="text-sm block mb-1">Hover Image(Optional)</label>
                            <label for="hover_image" class="flex items-center gap-3 p-2 border border-dashed border-primary rounded-md text-primary cursor-pointer justify-center w-full max-w-80 h-72">
                                <input type="file" id="hover_image" hidden @change="hoverImage">
                                <img v-if="hoverImg" :src="hoverImg" alt="">
                                <div v-else>
                                    <p>Upload Product Cover Image</p>
                                </div>
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
        
        <div class="text-center pt-10">
            <Button class="w-1/2 mx-auto" @click="onSubmit">Save Product</Button>
        </div>
    </AppLayout>
</template>