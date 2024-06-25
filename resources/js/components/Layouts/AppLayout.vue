<script setup lang="ts">
import SideBar from '@/components/Layouts/SideBar.vue';
</script>
<template>
    <div class="w-full flex">
        <aside class="w-48 mx-auto overflow-y-scroll fixed top-0 left-0 bottom-0 h-screen bg-primary">
            <SideBar />
        </aside>
        <main class="ml-44 w-full p-4 pr-0 mb-8">
            <div>
                <slot />
            </div>
        </main>
    </div>
</template> 
