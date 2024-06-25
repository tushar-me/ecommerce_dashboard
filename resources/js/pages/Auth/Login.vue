<script setup lang="ts">
    
    import { ref } from 'vue';
    import { useAuthStore } from '@/stores/useAuthStore.js';
    import { useRouter } from 'vue-router'
    import {toast} from "vue3-toastify";


    const authStore = useAuthStore();
    const router = useRouter()



    //Login
    const loginCredential = ref({
    email: 'tushar@admin.com',
    password: '12345678',
    });

    const handleLogin = async () => {
    try {
        const loginResponse = await authStore.login(loginCredential.value);
            console.log(loginResponse);
            if (loginResponse) {
            toast.success('Login successful!', { autoClose: 1000 });
            router.push({ name: "Dashboard" });
            }
        } catch (error) {
            toast.error(error.response?.data?.message || 'Login failed. Please try again.', { autoClose: 1000 });
        }
    }

</script>

<template>
    <div class="w-full h-screen bg-white">
        <div class="flex">
            <div class="w-3/4 h-screen">
                <img src="https://img.freepik.com/free-vector/ecommerce-checkout-laptop-concept-illustration_114360-8233.jpg?t=st=1719227470~exp=1719231070~hmac=bf22bb02896a562b13892ad72d1ab1aeb86606efd9d3468c2924af202ee4475c&w=1800" class="w-full h-full" alt="">
            </div>
            <div class="w-1/4">
                <div class="w-full h-screen flex items-center justify-center bg-white shadow-lg">
                    <div class="w-full px-4">
                        <h3 class="text-center font-medium text-3xl uppercase mb-3">Sign in To <span class="text-primary">Dashboard</span></h3>
                        <div class="flex flex-col items-center gap-5">
                            <div class="w-full">
                                <label for="email" class="flex items-center gap-2">Email</label>
                                <input type="email" class="p-2 border border-primary rounded-md focus:ring-0 focus:border-primary w-full" v-model="loginCredential.email">
                            </div>
                            <div class="w-full">
                                <label for="password" class="flex items-center gap-2">Pasword</label>
                                <input type="text" v-model="loginCredential.password" class="p-2 border border-primary rounded-md focus:ring-0 focus:border-primary w-full">
                            </div>
                            <div class="w-full">
                                <button @click="handleLogin" class="bg-primary text-center py-2 w-full text-white rounded-md">Access Dashboard</button>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>