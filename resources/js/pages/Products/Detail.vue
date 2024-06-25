<script setup>

import AppLayout from "@/components/Layouts/AppLayout.vue";
import Gallary from "@/components/Gallary.vue";
</script>

<template>
    <AppLayout>
        <section>
            <div class="flex flex-col lg:flex-row mt-16 mx-6">
                <div class="w-full lg:w-[40%]">
                    <div>
                        <Gallary />
                    </div>
                </div>
                <div class="w-full lg:w-[50%] px-8">
                    <div>
                        <h3 class=" font-base text-md lg:text-2xl"> LILAC NIACINAMIDE SERUM 5%</h3>
                        <p class="my-4">
                            <span class="rounded bg-primary px-2 py-0.5 text-white text-sm font-medium"> In Stock </span>
                        </p>
                        <p class="text-xl lg:text-2xl"> <span class="text-rose-700">৳ 637.00 </span> ৳ 750.00 per <span class="text-sm"> Save ৳113 (15% off)</span></p>
                        <p class="text-sm  border-b border-gray-300 py-4">120 ml</p>
                    </div>
                    <div class="border-b border-gray-300 py-4">
                        <ul class="text-sm font-medium w-full">
                            <li class="flex gap-5 leading-6">
                                <p class="w-2/5">Brand</p>
                                <p class="font-normal">TP-Link</p>
                            </li>
                            <li class="flex gap-5 leading-8">
                                <p class="w-2/5">Model Name</p>
                                <p class="font-normal">Deco X55</p>
                            </li>
                            <li class="flex gap-5 leading-8">
                                <p class="w-2/5">Special Feature</p>
                                <p class="font-normal">Guest Mode</p>
                            </li>
                            <li class="flex gap-5 leading-8">
                                <p class="w-2/5">Frequency Band Class</p>
                                <p class="font-normal">Dual-Band</p>
                            </li>
                            <li class="flex gap-5 leading-8">
                                <p class="w-2/5">Compatible Devices</p>
                                <p class="font-normal">Smartphone, Personal Computer</p>
                            </li>
                        </ul>
                    </div>
                    <div class="py-4">
                        <h2>About this item</h2>
                        <ul class="list-disc lg:px-6 text-sm leading-6">
                            <li>Contains optimal concentration of Niacinamide</li>
                            <li>Provides perfect duo of Niacinamide & Sodium PCA</li>
                            <li>Safe to be used by beginners of advanced skincare</li>
                            <li>Can be used during both day & night</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>

<style scoped>

</style>
