<script setup>
import Gallary from "@/components/Gallary.vue";
import { ref, onMounted } from 'vue'
import  useAxios  from '@/composables/useAxios';
import { useAuthStore } from "@/stores/useAuthStore";
import { useRoute } from 'vue-router';

const { loading, error, sendRequest } = useAxios();
const authStore = useAuthStore(); 
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

onMounted(() => {
    getProduct();
})
</script>

<template>
    <AppLayout>
        <section>
            <img :src="product?.cover_image" alt="">
            <div class="flex flex-col lg:flex-row mt-5 mx-6 bg-white shadow-lg p-5">
                <div class="w-full lg:w-[40%]">
                    <div>
                        <Gallary  :coverImg="product?.cover_image" />
                        
                    </div>
                </div>
                <div class="w-full lg:w-[50%] px-8">
                    <div>
                        <h3 class=" font-base text-md lg:text-2xl">{{ product?.title }}</h3>
                        <p class="my-4">
                            <span class="rounded bg-primary px-2 py-0.5 text-white text-sm font-medium"> In Stock </span>
                        </p>
                        <p class="text-xl lg:text-2xl">৳ {{ product?.price }}</p>
                        
                    </div>
                </div>
            </div>
            <div v-for="attribute in product?.attributes">
                <p>{{ attribute?.name }}</p>
                <ul class="flex items-center gap-3">
                    <li v-for="value in attribute?.values">
                        <a href="#" class="p-2 border rounded">{{ value.value }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </AppLayout>
</template>
