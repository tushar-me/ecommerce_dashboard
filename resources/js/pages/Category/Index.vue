<script setup>
import { onMounted, ref } from 'vue';
import useAxios from "@/composables/useAxios"
import { useAuthStore } from '@/stores/useAuthStore.js';
import { toast } from 'vue3-toastify';

const authStore = useAuthStore();
const { loading, error, sendRequest } = useAxios();

const categories= ref(null);

const getCategories = async() => {
    const res = await sendRequest({
        method: 'get',
        url: '/v1/category',
        headers: {
            authorization: `Bearer ${authStore.user.token}`
        }
    });
    console.log(res);
    categories.value = res?.data?.data
}


const deleteCategory = async(category)  => {
    const response = await sendRequest({
        method:'delete',
        url: `/v1/category/${category}`,
        headers: {
            authorization: `Bearer ${authStore.user.token}`,
        }
    });
    if(response){
        getCategories();
        toast.success('Category Deleted Succesfully', {autoClose:1000})
    }
}

onMounted(() => {
    getCategories();
})
</script>
<template>
    <AppLayout>
        <section class="px-4">
            <div class="bg-white p-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <Icon name="tabler:category" class="text-3xl text-primary" />
                        <h3 class="text-primary text-3xl font-semibold">Category</h3>
                    </div>
                    <div>
                        <RouterLink to="/create-category" class="bg-primary text-white px-5 py-2 flex items-center gap-2">
                            <Icon name="material-symbols:add-box-outline" />
                            Add Record
                        </RouterLink>
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
                            <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-primary rounded-lg w-96 bg-gray-50 focus:ring-primary focus:border-primary" placeholder="Search for Categories">
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
        <div class="mx-5 bg-white">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white  uppercase bg-primary dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all" type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Icon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Banner
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Parent Category
                        </th>
                        
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="category in categories" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="w-4 px-4 py-3">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th class="flex items-center px-6 py-4">
                            <img class="w-10 h-auto" :src="category?.icon" :alt="category?.name">
                        </th>

                        <td class="px-6 py-4">
                            <img :src="category?.banner" class="w-16 md:w-32 h-auto lg:h-12 max-w-full max-h-full" :alt="category?.name">
                        </td>
                        <th class=" px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <div>
                                <div class="text-base font-medium">{{ category?.name }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="checkbox">
                                    <input type="checkbox"   :id="`status-${category?.id}`" class="hidden" :checked="category?.status ===1"> 
                                    <label :for="`status-${category?.id}`">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ category?.order_number }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span v-if="category?.parent_id === 0" class="bg-green-200 rounded-full text-green-950 px-3 py-1 text-xs">Main</span>
                            <span v-else class="bg-yellow-200 rounded-full text-yellow-600 px-3 py-1 text-xs">{{ category?.parent?.name }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <RouterLink :to="`/category/${category?.id}`"  class="w-8 h-8 rounded-md flex items-center justify-center bg-green-400/10 border border-green-900">
                                    <Icon  name="material-symbols:visibility-outline-rounded" class="text-xl text-green-900" />
                                </RouterLink>
                                <RouterLink :to="`/edit-category/${category?.id}`" class="w-8 h-8 rounded-md flex items-center justify-center bg-yellow-400/10 border border-yellow-900">
                                    <Icon name="material-symbols:edit-square-outline" class="text-lg text-yellow-900" />
                                </RouterLink>
                                <button @click="deleteCategory(category?.id)" class="w-8 h-8 rounded-md flex items-center justify-center bg-red-400/10 border border-red-900">
                                    <Icon name="material-symbols:delete-outline" class="text-lg text-red-900" />
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AppLayout>
</template>
