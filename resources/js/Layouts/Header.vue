<script setup>
import { Link, Head } from '@inertiajs/inertia-vue3';
import GithubIcon from '@/Components/Icons/GitHubIcon.vue';

defineProps({
    title: String,
})
</script>

<template>

    <Head>
        <title>{{ title }}</title>
    </Head>
    <header class="absolute top-0 inset-x-0">
        <div class="container flex p-4 mx-auto" :class="route().current('welcome') ? 'justify-end' : 'justify-between'">
            <Link v-if="!route().current('welcome')" :href="route('welcome')"
                class="font-bold text-indigo-500 rounded-md hover:text-indigo-600">
            NNN Certificate
            </Link>
            <a href="http://www.github.com/jedymatt/nnn-certificate"
                class="hover:opacity-50 rounded-md inline-flex items-center justify-center" target="_blank" rel="noopener">
                <GithubIcon class="h-5 w-5" />
            </a>
        </div>
    </header>
</template>
