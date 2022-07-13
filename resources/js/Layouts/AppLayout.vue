<script setup>
import HeaderLayout from './HeaderLayout.vue';
</script>
<template>
    <div class="dark:bg-neutral-900 dark:text-white">
        <HeaderLayout />
        <slot></slot>
    </div>
</template>
