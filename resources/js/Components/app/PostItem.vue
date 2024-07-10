<script setup lang="ts">
defineProps({
    post: Object,
})
</script>

<template>
    <div>
        <div class="flex items-center gap-3 mb-3">
            <a href="javascript:void(0)">
                <img :src="post.user.avatar" alt="" class="w-[40px] rounded-full">
            </a>
            <div>
                <h4 class="font-bold">
                    <a href="javascript:void(0)">
                        {{ post.user.name }}
                    </a>
                </h4>
                <small class="text-gray-400">{{ post.created_at }}</small>
            </div>
        </div>
        <div v-html="post.body"></div>
    </div>
</template>

<style scoped>

</style>
