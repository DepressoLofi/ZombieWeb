<template>
    <div class="w-full h-full flex fixed">
        <SideBar :dataOpenSideBar="openSidebar" />
        <div class="w-full h-full">
            <Header :dataOpenSideBar="openSidebar" :clickHambugar="toggleSidebar" />
            <div class="w-full container-wrapper">
                <router-view></router-view>
            </div>

        </div>



    </div>
</template>

<script setup>
import Header from "@/components/header.vue"
import SideBar from "@/components/sidebar.vue"
import { ref } from 'vue'
import { useAuthStore } from '@/stores/index';

const authStore = useAuthStore();

const openSidebar = ref(true);

const toggleSidebar = () => {
    openSidebar.value = !openSidebar.value;
}


</script>

<style scoped>
.container-wrapper {
    height: 100%;
    overflow-y: auto;
}

.container-wrapper::-webkit-scrollbar {
    display: none;
}
</style>
