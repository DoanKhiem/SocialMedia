<script setup lang="ts">

import PostItem from "@/Components/app/PostItem.vue";

const post1 = {
    user: {
        id: 1,
        avatar: "https://avatar.iran.liara.run/public/44",
        name: "John Doe",
    },
    group: null,
    attachments: [
        {
            id: 1,
            name: "image.jpg",
            url: "https://picsum.photos/1000",
            mime: "image/jpeg",
        },
        {
            id: 2,
            name: "document.pdf",
            url: "https://picsum.photos/1000",
            mime: "application/pdf",
        },
        {
            id: 3,
            name: "video.mp4",
            url: "https://picsum.photos/1000",
            mime: "video/mp4",
        }
    ],
    body: `<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit laboriosam nostrum qui quia, repudiandae saepe similique totam velit voluptatem.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit laboriosam nostrum qui quia, repudiandae saepe similique totam velit voluptatem.</p>`,
    created_at: "1 hour ago",
}
const post2 = {
    user: {
        id: 1,
        avatar: "https://avatar.iran.liara.run/public/46",
        name: "Doan Khiem",
    },
    group: {
        id: 1,
        name: "Laravel",
    },
    body: `<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit laboriosam nostrum qui quia, repudiandae saepe similique totam velit voluptatem.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit laboriosam nostrum qui quia, repudiandae saepe similique totam velit voluptatem.</p>`,
    created_at: "1 hour ago",
}
</script>

<template>
    <div>
        <PostItem :post="post1" />
        <PostItem :post="post2" />
    </div>
</template>

<style scoped>

</style>
