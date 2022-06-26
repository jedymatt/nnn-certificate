<script setup>
import {ref} from "vue";
import {Inertia} from "@inertiajs/inertia";

const validationKey = ref('');

const verify = () => {
    console.log(validationKey.value);
    Inertia.get(route('certificate.verify.result', {
        certificate: validationKey.value,
    }))
}
</script>

<template>
        <input v-model="validationKey" type="search">
        <div>
            <button @click="verify">Verify</button>
        </div>
</template>
