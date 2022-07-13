<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { Head } from "@inertiajs/inertia-vue3";

import AppLayout from "@/Layouts/AppLayout.vue";

const validationKey = ref('');

const verify = () => {
    console.log(validationKey.value);
    Inertia.get(route('certificate.verify.result', {
        certificate: validationKey.value,
    }))
}
</script>

<template>

    <Head>
        <title>Verify Certificate</title>
    </Head>
    <AppLayout>
        <main class="flex items-center justify-center py-12 min-h-screen px-4">
            <div class="max-w-3xl">
                <label>
                    <span class="text-2xl font-semibold text-indigo-500">Validation Key</span> <span
                        class="text-red-500 align-super">*</span>
                    <input
                        class="mt-4 w-full text-xl rounded-md border-gray-300 focus:border-indigo-400 focus:ring focus:ring-indigo-200/50 dark:focus:ring-indigo-500/50 dark:bg-neutral-800 dark:border-indigo-500"
                        type="search" v-model="validationKey" placeholder="Enter key here..." required>
                </label>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    The validation key can be found below the qr code of your certificate.
                </p>

                <div class="flex mt-4 place-content-end">
                    <button @click="verify" class="form-btn">
                        <span class="text-white">Verify</span>
                    </button>
                </div>
            </div>
        </main>
    </AppLayout>
</template>
