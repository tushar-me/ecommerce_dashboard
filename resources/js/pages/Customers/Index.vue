<script setup>
    import { onMounted, ref } from 'vue';
    import useAxios from "@/composables/useAxios"
    import { useAuthStore } from '@/stores/useAuthStore.js';
    import { toast } from 'vue3-toastify';
    import Pagination from '@/components/Pagination.vue'
    const authStore = useAuthStore();
    const { loading, error, sendRequest } = useAxios();

    const customers= ref(null);

    const getCustomers = async() => {
        const response = await sendRequest({
            method: 'get',
            url: '/v1/customer',
            headers: {
                authorization: `Bearer ${authStore.user.token}`
            }
        });
        customers.value = response.data
    }

    const onDelete = async(id) => {
        const response = await sendRequest({
            method:'delete',
            url:`/v1/customer/${id}`,
            headers: {
                authorization: `Bearer ${authStore.user.token}`
            }
        })

        if(response) {
            toast.success('Customer Deleted Succesfully');
            getCustomers();
        }
    }

    onMounted(() => {
        getCustomers();
    })
</script>
<template>
    <AppLayout>
        <section class="px-4">
            <div class="bg-white p-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <Icon name="gis:globe-users" class="text-3xl text-primary" />
                        <h3 class="text-primary text-3xl font-semibold">Customers</h3>
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
        <div class="mx-5 bg-white">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white  uppercase bg-primary dark:bg-gray-700 dark:text-gray-400">
                <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="customer in customers?.data" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="w-12 h-12 bg-purple-700 rounded-full flex items-center justify-center">
                    <span class="text-white text-xl">{{customer?.name?.substring(0,1)  }}</span>
                    </div>
                    <div class="ps-3">
                    <div class="text-base font-semibold">{{customer?.name  }}</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    {{ customer?.phone }}
                </td>
                <td class="px-6 py-4">
                    {{ customer?.email }}
                </td>
                <td class="px-6 py-4">
                    {{ customer?.address?.name }}
                </td>
                <td class="px-6 py-4">
                <div class="flex items-center gap-2">
                    <button class="w-8 h-8 rounded-md flex items-center justify-center bg-green-400/10 border border-green-900">
                        <Icon  name="material-symbols:visibility-outline-rounded" class="text-xl text-green-900" />
                    </button>
                    <button class="w-8 h-8 rounded-md flex items-center justify-center bg-yellow-400/10 border border-yellow-900">
                        <Icon name="material-symbols:edit-square-outline" class="text-lg text-yellow-900" />
                    </button>
                    <button @click="onDelete(customer?.id)" class="w-8 h-8 rounded-md flex items-center justify-center bg-red-400/10 border border-red-900">
                        <Icon name="material-symbols:delete-outline" class="text-lg text-red-900" />
                    </button>
                </div>
                </td>
                </tr>
                </tbody>
            </table>
            <Pagination v-if="customers?.data?.length > 0" :links="customers?.meta?.links" :from="customers?.meta?.from" :to="customers?.meta?.to"
                :total="customers?.meta?.total"/>
        </div>
    </div>
    </AppLayout>
</template>
