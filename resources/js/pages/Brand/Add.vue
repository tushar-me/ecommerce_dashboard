<script setup>
import Editor from "@/components/Editor.vue";
</script>
<template>
    <AppLayout>
        <div class="bg-white shadow-md p-6 max-w-5xl mx-auto">
            <h3 class="mb-10">Create a New Brand</h3>
            <div>
                <div class="flex items-center">
                    <div class="w-1/2 pr-2">
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Brand Name</label>
                            <input type="text" class="border border-primary rounded-md font-normal text-sm w-full">
                        </div>
                    </div>
                </div>
                <div class="flex items-center my-10">
                    <div class="w-1/3 pr-2">
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Brand Logo</label>
                            <label class="border border-primary border-dashed p-4 rounded-2xl flex items-center justify-center w-full h-40 cursor-pointer">
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <Icon name="tabler:cloud-upload" class="text-primary text-5xl opacity-85" />
                                    <span class="text-primary font-semibold opacity-85">Upload Brand Logo</span>
                                </div>
                                <input type="file" hidden>
                            </label>
                        </div>
                    </div>
                    <div class="w-2/3 pl-2">
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Brand Banner</label>
                            <label class="border border-primary border-dashed p-4 rounded-2xl flex items-center justify-center w-full h-40 cursor-pointer">
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <Icon name="tabler:cloud-upload" class="text-primary text-5xl opacity-85" />
                                    <span class="text-primary font-semibold opacity-85">Upload Brand Banner</span>
                                </div>
                                <input type="file" hidden>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <Editor />
                </div>
            </div>
            <div class="mt-5">
                <Button>Save Brand</Button>
            </div>
        </div>
    </AppLayout>
</template>
