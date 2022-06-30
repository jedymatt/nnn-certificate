<script setup>
import { Link} from '@inertiajs/inertia-vue3';
import {PlusIcon} from '@heroicons/vue/solid'
import {DocumentSearchIcon} from '@heroicons/vue/solid'
import Header from "@/Layouts/Header.vue";
</script>

<template>
    <Header title="Welcome" />

    <main class="min-h-screen flex flex-col justify-center items-center container py-16 px-4">
        <h1 class="text-5xl font-black text-indigo-500 text-center lg:text-6xl hover:text-indigo-600 pb-10">NNN Certificate</h1>
        <div class="flex flex-row space-x-4">
            <Link :href="route('certificate.create')"
                  class="btn">
                <PlusIcon class="w-5 h-5"/>
                Create
            </Link>
            <Link :href="route('certificate.verify')"
                  class="btn">
                <DocumentSearchIcon class="w-5 h-5" />
                Verify
            </Link>
        </div>
    </main>

</template>
