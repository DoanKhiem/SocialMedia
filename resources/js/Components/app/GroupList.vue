<script setup lang="ts">


import GroupItem from "@/Components/app/GroupItem.vue";

defineProps({

})
</script>

<template>
    <div class="py-8">
        <h2 class="text-2xl font-bold">My Groups</h2>
        <div v-if="false" class="text-gray-400 flex text-center">You are not joined to any groups</div>
        <div v-else>
            <GroupItem img="https://picsum.photos/100"
                       title="Laravel Developers"
                       description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, quod." />
            <GroupItem img="https://picsum.photos/100"
                       title="Vue.Js Developers"
                       description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, quod." />

        </div>
    </div>
</template>

<style scoped>

</style>
