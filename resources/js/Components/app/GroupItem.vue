<script setup lang="ts">
    defineProps({
        img: String,
        title: String,
        description: String,
    })
</script>

<template>
    <div class="flex items-start gap-3 mb-3">
        <img :src="img" alt="" class="w-[48px] rounded-full">
        <div>
            <h3 class="font-black text-xl">{{ title }}</h3>
            <div class="text-xs text-gray-500">{{ description }}</div>
        </div>
    </div>
</template>

<style scoped>

</style>
