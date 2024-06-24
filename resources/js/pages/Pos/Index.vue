<template>
    <AppLayout>
        <section>
            <div class="flex gap-3">
                <div class="w-4/6">
                    <div class="bg-green-200/50 p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <Icon name="ic:sharp-compost" class="text-3xl text-primary" />
                                <h3 class="text-primary text-3xl font-semibold">Pos</h3>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 dark:bg-gray-900">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-primary dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-primary rounded-lg w-96 bg-gray-50 focus:ring-primary focus:border-primary" placeholder="Search for Products">
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <Select
                                    class="w-28"
                                    placeholder="select category"
                                    :options="['Canada', 'United States']"
                                ></Select>
                                <Select
                                    class="w-28"
                                    placeholder="select Brand"
                                    :options="['Canada', 'United States']"
                                ></Select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-2/6">
                    <div class="bg-white shadow">

                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>>
<script setup>

import AppLayout from "@/components/Layouts/AppLayout.vue";
</script>
