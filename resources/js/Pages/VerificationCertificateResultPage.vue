<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
defineProps({
    certificate: Object,
});
</script>
<template>

    <Head>
        <title>{{ certificate.display_name }}</title>
    </Head>

    <main class="dark:bg-neutral-900  dark:text-white min-h-screen flex flex-col gap-2 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-green-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
        </svg>
        <div class="text-center">
            <h1 class="font-semibold uppercase">{{ certificate.display_name }}</h1>
            <p>
                is a verified NNN Survivor!
            </p>
        </div>
    </main>
</template>
