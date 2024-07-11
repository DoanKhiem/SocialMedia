<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import GroupList from "@/Components/app/GroupList.vue";
import CreatePost from "@/Components/app/CreatePost.vue";
import FollowingList from "@/Components/app/FollowingList.vue";
import PostList from "@/Components/app/PostList.vue";

defineProps<{

}>();
</script>

<template>
    <Head title="Social Media Website" />

    <div class="grid lg:grid-cols-12 gap-3 p-4">

        <div class="lg:col-span-3 lg:order-1">
            <GroupList />
        </div>
        <div class="lg:col-span-3 lg:order-3">
            <FollowingList />
        </div>
        <div class="lg:col-span-6 lg:order-2">
            <CreatePost />
            <PostList />
        </div>

    </div>
</template>
