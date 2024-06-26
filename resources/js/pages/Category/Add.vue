<script setup>
</script>
<template>
    <AppLayout>
        <div class="bg-white shadow-md p-6 max-w-5xl mx-auto">
            <h3 class="mb-10">Create a New Category</h3>
            <div class="flex -mx-2">
                <div class="w-1/2 px-2">
                    <div class="w-full flex flex-col gap-5">
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Category Name</label>
                            <input type="text" class="border border-primary rounded-md font-normal text-sm w-full">
                        </div>
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Category Description</label>
                            <textarea type="text" class="border border-primary rounded-md font-normal text-sm w-full h-28"></textarea>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 px-2">
                    <div class="w-full flex flex-col gap-3">
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Category Icon</label>
                            <label for="category-image" class="p-3 border border-dashed border-primary flex items-center justify-center gap-2 rounded cursor-pointer hover:shadow-md shadow-primary">
                                <input type="file" hidden id="category-image">
                                <Icon name="tabler:cloud-upload" class="text-primary text-xl" />
                                <span class="text-sm text-primary">Upload Category Icon</span>
                            </label>
                        </div>
                        <div class="w-full">
                            <label for="name" class="text-sm block mb-2">Category Banner</label>
                            <label for="category-banner" class="p-3 border border-dashed border-primary flex items-center justify-center gap-2 rounded cursor-pointer hover:shadow-md shadow-primary">
                                <input type="file" hidden id="category-banner">
                                <Icon name="tabler:cloud-upload" class="text-primary text-xl" />
                                <span class="text-sm text-primary">Upload Category Banner</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <Button>Save Category</Button>
            </div>
        </div>
    </AppLayout>
</template>