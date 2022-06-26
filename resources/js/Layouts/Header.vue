<script setup>
import {Link, Head} from '@inertiajs/inertia-vue3';

defineProps({
    title: String,
})
</script>

<template>
    <Head><title>{{ title }}</title></Head>
    <header class="absolute top-0 inset-x-0">
        <div class="container flex p-4 mx-auto"
             :class="route().current('welcome') ? 'justify-end' : 'justify-between'"
        >
            <Link v-if="!route().current('welcome')" :href="route('welcome')"
                  class="font-semibold text-indigo-500 hover:text-indigo-600">
                NNN Certificate
            </Link>
            <a href="http://www.github.com/jedymatt/nnn-certificate" class="hover:underline" target="_blank"
               rel="noopener">Github</a>
        </div>
    </header>
</template>
