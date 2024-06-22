<script setup>
    import {FwbTooltip } from 'flowbite-vue'
    const props = defineProps({
        placement: {
            type: String,
            default:"top"
        }
    })
</script>
<template>
    <fwb-tooltip :placement="placement">
        <template #trigger>
            <slot name="trigger"></slot>
        </template>
        <template #content >
            <slot name="content" ></slot>
        </template>
    </fwb-tooltip>
</template>