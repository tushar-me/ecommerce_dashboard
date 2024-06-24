<script setup lang="ts">
import SideBar from '@/components/Layouts/SideBar.vue';
</script>
<template>
    <div class="bg-primary w-full h-screen flex ">
        <aside class="w-52 fixed top-0 left-0 bottom-0 h-screen bg-primary">
            <SideBar />
        </aside>
        <main class="ml-52 w-full h-screen bg-slate-100 p-4 pb-10">
            <div class="ml-52 z-20 bg-primary p-4 fixed top-0 left-0 right-0 w-full">
            </div>
            <div class="mt-10">
                <slot />
            </div>
        </main>
    </div>
</template>
