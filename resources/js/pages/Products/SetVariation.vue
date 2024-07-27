<script setup>
    import useAxios from '@/composables/useAxios';
    import { useAuthStore } from '@/stores/useAuthStore.js';
    import {useRoute} from 'vue-router';
    import {ref, onMounted, watch} from 'vue';
    import { toast } from 'vue3-toastify';
    import Modal from '@/components/Modal.vue';


    const authStore = useAuthStore();
    const route = useRoute();
    const {loading, error, sendRequest} = useAxios();

    // get product
    const product = ref(null);
    const getProduct = async() => {
        const response = await sendRequest({
            method: 'get',
            url: `/v1/product-variation/${route.params.slug}`,
            headers: {
                authorization: `Bearer ${authStore.user.token}`
            }   
        })

        product.value = response.data
    }

    // get all variation
    const variations = ref(null);
    const getAllVariantList = async() => {
        const response  = await sendRequest({
            method: 'get',
            url:'/v1/product-variation',
            headers: {
                authorization: `Bearer ${authStore.user.token}`
            } 
        });

        variations.value = response.data
        selectedVariant.value = variations.value[0]
    }
    
    

    const form = ref({
        variationDivider: "/",
        varientSkuPrefix: "Ver-",
        defaultQty: 13,

        productName: null,
        defaultPrice: null,
        defaultStoke: null,
        variants:[],
        product_variant: [
            {
                option: 1,
                tags: []
            }
        ],
        product_variant_prices: [],
        variationValues: [],
    })

    const checkVariant = () => {
        let tags = [];
        form.value.product_variant_prices = [];
        form.value.product_variant.filter((item) => {
            tags.push(item.tags);
            console.log(item)
        })

        getCombn(tags).forEach(item => {
            form.value.product_variant_prices.push({
                title: item,
                price: 0,
                stock: 0
            })
        })
    }

    const getCombn = (arr, pre) => {
            pre = pre || '';
            if (!arr.length) {
                return pre;
            }
            let self = this;
            let ans = arr[0].reduce(function (ans, value) {
                return ans.concat(self.getCombn(arr.slice(1), pre + value + '/'));
            }, []);
            return ans;
        }
    
    const image = (event, index) => {
        const file = event.target.files[0];
        if (file) {
            form.value.variants[index].image = file;
            form.value.variants[index].imgPreview = URL.createObjectURL(file);
        }
    };


    const storeVariation = async() => {

        const response = await sendRequest({
            method:'post',
            url:'/v1/product-variation',
            data:form.value,
            params: {
                product_id: product?.value.id
            },
            headers: {
                authorization: `Bearer ${authStore.user.token}`,
                'Content-Type': 'multipart/form-data'
            },
        })

        if(response) {
            toast.success('Variation Added Succesfully');
            getProduct();
        }
    }


    onMounted(() => {
        getAllVariantList();
        getProduct();
    })
</script>
<template>
    <AppLayout>
        <div class="flex space-x-5" >
            <div class="w-1/5">
                <div class="w-full bg-white shadow-lg p-2">
                    <img class="w-full h-auto" :src="product?.cover_image">
                    <div class="mt-4">
                        <h3 class="text-base">{{ product?.title }}</h3>
                        <p>{{ product?.price }}</p>
                    </div>
                </div>
            </div>
            <div class="w-4/5">
                <div class="w-full bg-white shadow-lg p-4 mb-5">
                    <div class="flex" v-for="(item,index) in form.product_variant">
                            <div class="w-4/12">
                                <div class="w-full">
                                    <label for="variation">
                                        <span>Variation</span>
                                    </label>
                                    <select class="w-full" id="variation" v-model="item.option" @change="changeVariation(index)">
                                        <option v-for="variant in variations"
                                                :value="variant.id">
                                            {{ variant.name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-8/12">
                                <div class="w-full">
                                    <label v-if="product_variant?.length !== 1"
                                           @click="removeItem(index)"
                                           class="float-right text-primary"
                                           style="cursor: pointer;">Remove</label>

                                    <label>Variation Options</label>

                                    <div class="container">
                                        <select class="selectpicker" multiple aria-label="Default select example"
                                                data-live-search="true">
                                            <option v-for="variant in form.variationValues[index]"
                                                    :value="variant">
                                                {{ variant.name }}
                                            </option>
                                        </select>
                                    </div>
                                    <Select v-model="item.tags"
                                            @update:model-value="checkVariant"
                                            label="name"
                                            class="form-control"
                                            multiple
                                            taggable
                                            placeholder="Select Variation Options...">
                                    </Select>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="w-full bg-white shadow-lg pb-5">
                    <table class="w-full text-sm text-left rtl:text-right text-black">
                        <thead class="text-xs text-white uppercase bg-secondary border-b bg-primary">
                        <tr>
                            <th scope="col" class="px-16 py-3">
                                Variant
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                price
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                stock
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Sku
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                image
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b border-gray-300"  v-for="variant_price in form.product_variant_prices">
                            <td class="p-4">
                                {{ item?.name }}
                            </td>
                            <td class="">
                                <input type="number" class="p-2 rounded-md border w-36" v-model="item.price">
                            </td>
                            <td class="">
                                <input type="number" class="p-2 rounded-md border w-32" v-model="item.stock">
                            </td>
                            <td>
                                <input type="text" class="p-2 rounded-md border w-40" v-model="item.sku">
                            </td>
                            <td>
                                <label :for="`v-image-${index}`" class="w-10 h-10 flex items-center justify-center border border-dashed   border-primary rounded-md cursor-pointer">
                                    <input :id="`v-image-${index}`" type="file" @change="image($event, index)" hidden>
                                    <Icon name="tabler:cloud-upload" class="text-primary text-2xl" />
                                </label>
                            </td>
                            <td class="py-2">
                                <img v-if="item.imgPreview" :src="item.imgPreview" class="w-16 h-16" alt="">
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    <div class="text-center pt-5">
                        <button class="bg-primary text-white w-1/2 py-2" @click="storeVariation">Save</button>
                    </div>
                </div>
            </div>
        </div>
        
    </AppLayout>
</template>