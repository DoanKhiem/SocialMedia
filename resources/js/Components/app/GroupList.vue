<script setup lang="ts">
import GroupItem from "@/Components/app/GroupItem.vue";
import TextInput from "@/Components/TextInput.vue";

import { ref } from 'vue'

defineProps({

})
const searchKeyword = ref('')
</script>

<template>
    <div class="px-3 bg-white rounded border py-3">
        <h2 class="text-xl font-bold mb-4">My Groups</h2>
        <TextInput :model-value="searchKeyword" placeholder="Search groups..." class="w-full" />
        <div class="py-8">
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
    </div>
</template>

<style scoped>

</style>
