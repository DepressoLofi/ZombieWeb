<template>

    <div class="w-full bg-neutral-900">
        <div class="flex justify-between items-center h-[50px] ">
            <div class="p-3">
                <i class="pi pi-bars text-xl text-red-800 cursor-pointer hover:text-red-600" @click="clickHambugar"></i>
            </div>
            <div>
                <div class="text-2xl font-bold text-red-800">Z - WEB</div>
            </div>
            <div class="flex items-center justify-center">
                <div class="text-md text-red-600">Admin</div>
                <div class="group">
                    <Avatar label="U" class="mx-3 cursor-pointer"  @click="toggle" aria-haspopup="true" aria-controls="overlay_menu" style="background-color:#9c27b0; color: #ffffff" shape="circle" />
                </div>


               <Menu
              ref="menu"
              class="bg-neutral-800 w-40 rounded px-2 pt-3 pb-1"
              id="overlay_menu"
              :model="items"
              :popup="true"
            >
              <template #item="{ item }">
                <div class="custom-menu-item hover:bg-neutral-600 mb-1 cursor-pointer rounded p-1">
                  <i class="text-md" :class="item.icon"></i>
                  <span class="ms-2">{{ item.label }}</span>
                </div>
              </template>
            </Menu>


            </div>

        </div>
    </div>

</template>

<script setup>
import { ref } from "vue";

const props = defineProps(['dataOpenSideBar', 'clickHambugar']);

const logout = () => {
    console.log('Hello logout');
}

const view = () => {
    console.log('Hello view');
}


const menu = ref();

const items = ref([
    {
        items: [
            {
                label: 'View Profile',
                icon: 'pi pi-user',
                command: view,

            },
            {
                label: 'Logout',
                icon: 'pi pi-sign-out',
                command: logout,

            }
        ]
    }
]);

const toggle = (event) => {
    menu.value.toggle(event);
};


</script>
