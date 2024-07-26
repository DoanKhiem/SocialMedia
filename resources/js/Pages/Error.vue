<template>
    <AuthenticatedLayout>
        <div class="py-16 text-center">
            <h1 class="text-2xl">{{ title }}</h1>
            <div>{{ body }}</div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
defineProps({
    title: String,
    body: String
})
</script>

<style scoped>

</style>
