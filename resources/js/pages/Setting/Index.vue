<script setup>
import AppLayout from "@/components/Layouts/AppLayout.vue";
</script>
<template>
    <AppLayout>
        <section class="px-4">
            <div class="bg-white p-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <Icon name="material-symbols:settings-outline-rounded" class="text-3xl text-primary" />
                        <h3 class="text-primary text-3xl font-semibold">Setting</h3>
                    </div>
                    <div>
                        <Button class="flex items-center gap-2">
                            <Icon name="material-symbols:add-box-outline" />
                            Add Record
                        </Button>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-primary dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-primary rounded-lg w-96 bg-gray-50 focus:ring-primary focus:border-primary" placeholder="Search for Customers">
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        Rows: <Select
                        class="w-20"
                        placeholder="25"
                        :options="[5, 10, 15, 20, 25]"
                    ></Select>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
