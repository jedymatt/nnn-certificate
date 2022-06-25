<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: '',
})

const submit = () => {
    form.post(route('certificates.generate'));
}
</script>

<template>
    <div class="px-3 py-6">
        <div class="md:w-3/4 md:mx-auto">
            <form @submit.prevent="submit">
                <label>
                    Name
                    <input class="w-full mt-1 rounded-lg" type="text" v-model="form.name" placeholder="Juan Dela Cruz"
                        required>
                </label>

                <div class="flex mt-4 place-content-end">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-500 rounded-full shadow-lg shadow-blue-500/50 hover:bg-blue-600">
                        <span class="text-white">Generate</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
