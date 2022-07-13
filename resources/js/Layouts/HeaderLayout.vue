<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import GithubIcon from '@/Components/Icons/GitHubIcon.vue';
import { MoonIcon, SunIcon } from '@heroicons/vue/solid'
import { useDark, useToggle } from '@vueuse/core';

const isDark = useDark();
const toggleDark = useToggle(isDark);
</script>

<template>
    <header class="absolute top-0 inset-x-0">
        <div class="container flex p-4 mx-auto" :class="route().current('welcome') ? 'justify-end' : 'justify-between'">
            <Link v-if="!route().current('welcome')" :href="route('welcome')"
                class="font-bold text-indigo-500 rounded-md hover:text-indigo-600">
            NNN Certificate
            </Link>
            <div class="inline-flex flex-row gap-4">
                <a href="http://www.github.com/jedymatt/nnn-certificate"
                    class="hover:opacity-50 rounded-md inline-flex items-center justify-center" target="_blank"
                    rel="noopener">
                    <GithubIcon class="h-5 w-5 dark:fill-white" />
                </a>
                <button class="hover:opacity-50 rounded-md inline-flex items-center justify-center"
                    @click="toggleDark()">
                    <MoonIcon class="h-6 w-6 dark:hidden" />
                    <SunIcon class="h-6 w-6 hidden dark:block dark:text-white" />
                </button>
            </div>
        </div>
    </header>
</template>
