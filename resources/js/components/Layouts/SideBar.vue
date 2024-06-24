<script setup>
const props = defineProps({
        text: {
            type: Boolean,
            default: true
        }
    });
</script>

<template>
    <div class="mx-auto">
        <div>
            <div>
                <img src="" alt="">
            </div>
            <ul class="flex flex-col gap-5">

                <li>
                    <Tooltip placement="right">
                        <template #trigger>
                            <RouterLink  to="/dashboard" class="group flex items-center gap-2 relative">
                                <div class=" w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                                    <Icon name="material-symbols:background-grid-small" size="20" class="text-white" />
                                </div>
                                <p v-if="text" class="text-white">Dashboard</p>
                            </RouterLink>
                        </template>
                        <template #content>
                            dashboard
                        </template>
                    </Tooltip>

                </li>
                <li>
                    <RouterLink to="/pos" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="mdi:point-of-sale" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Pos</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/products" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon   name="carbon:ibm-data-product-exchange" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Products</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/category" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="carbon:category-new-each" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Category</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/brand" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="tabler:brand-bandcamp" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Brand</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/stock" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="ant-design:stock-outlined" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Stock</p>
                    </RouterLink>
                </li>

                <li>
                    <RouterLink  to="/customers" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="oui:app-users-roles" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Customer</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/manager" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="hugeicons:manager" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Manager</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/order" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="material-symbols:orders-outline" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Order</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink to="/shipping" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="ph:map-pin-area" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Shipping</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink to="/slider" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="solar:slider-vertical-minimalistic-bold" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Slider</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink to="/advertise" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="hugeicons:advertisement" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Advertise</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/setting" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="material-symbols:settings-outline-rounded" size="20" class="text-white" />
                        </div>
                        <p  v-if="text" class="text-white">Settings</p>
                    </RouterLink>
                </li>
            </ul>
            <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                <RouterLink to="/" class="w-10 h-10 border border-gray-100 rounded-full flex items-center justify-center">
                    <Icon name="material-symbols:manage-accounts" class="text-white text-2xl" />
                </RouterLink>
            </div>
        </div>
    </div>
</template>
