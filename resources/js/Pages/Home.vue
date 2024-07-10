<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import GroupList from "@/Components/app/GroupList.vue";
import CreatePost from "@/Components/app/CreatePost.vue";
import FollowingList from "@/Components/app/FollowingList.vue";
import PostList from "@/Components/app/PostList.vue";

defineProps<{

}>();

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Social Media Website" />

    <div class="grid grid-cols-12 gap-3">

        <div class="col-span-3 py-6">
            <GroupList />
        </div>
        <div class="col-span-6">
            <CreatePost />
            <PostList />
        </div>
        <div class="col-span-3">
            <FollowingList />
        </div>
    </div>
</template>
