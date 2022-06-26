<script setup>
import {useForm, Head} from "@inertiajs/inertia-vue3";
import Header from "@/Layouts/Header";

const form = useForm({
    display_name: '',
})

const submit = () => {
    form.post(route('certificate.create'));
}
</script>

<template>
    <Header title="Create Certificate" />
    <main class="flex items-center justify-center py-12 min-h-screen px-4">
        <div class="max-w-3xl">
            <form @submit.prevent="submit">
                <label>
                    <span class="text-2xl font-semibold text-gray-900">Display Name</span> <span class="text-red-500 align-super">*</span>
                    <input
                        class="mt-4 w-full text-xl rounded-md border-gray-300 focus:border-indigo-400 focus:ring focus:ring-indigo-200"
                        type="text" v-model="form.display_name"
                        placeholder="Enter name here..."
                        required>
                </label>
                <p class="mt-2 text-sm text-gray-600">
                    This will be used to display on your certificate.
                </p>

                <div class="flex mt-4 place-content-end">
                    <button type="submit"
                            class="form-btn">
                        <span class="text-white">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </main>
</template>
