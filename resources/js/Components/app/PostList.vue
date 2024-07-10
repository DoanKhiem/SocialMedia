<script setup lang="ts">

import PostItem from "@/Components/app/PostItem.vue";

const post1 = {
    user: {
        id: 1,
        avatar: "https://avatar.iran.liara.run/public/45",
        name: "John Doe",
    },
    group: null,
    body: `<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit laboriosam nostrum qui quia, repudiandae saepe similique totam velit voluptatem.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit laboriosam nostrum qui quia, repudiandae saepe similique totam velit voluptatem.</p>`,
    created_at: "1 hour ago",
}
</script>

<template>
    <div>
        <PostItem :post="post1" />
    </div>
</template>

<style scoped>

</style>
