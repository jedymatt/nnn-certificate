<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head>
        <title>Welcome</title>
    </Head>
    <div class=" top-0 w-full flex flex-col items-center justify-center min-h-screen p-2 from-blue-100 to-blue-400">
        <h1
            class="font-black text-center text-transparent text-7xl bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800 drop-shadow-lg">
            NNN Certificate</h1>
        <div class="flex flex-row gap-6 mt-4">
            <Link
                class="px-6 py-3 text-center rounded-full shadow-lg bg-gradient-to-r from-blue-400 to-blue-500 shadow-blue-600/50 hover:cursor-pointer"
                :href="route('certificate.generate')">
                <span class="font-semibold text-white">Generate</span>
            </Link>
            <a class="px-6 py-3 text-center bg-white border rounded-full shadow-lg shadow-blue-600/50 hover:cursor-pointer"
               :href="route('certificate.verify')">
                <span class="font-semibold text-blue-600">Validate</span>
            </a>
        </div>
    </div>

</template>
