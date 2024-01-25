<template>
  <div class="h-screen border-r-2 border-red-800 bg-stone-900" id="side-bar"
    :class="dataOpenSideBar == true ? 'side-bar-visible' : 'side-bar-close'">
    <div class="bg-stone-900 border-b border-red-800 h-[50px] flex justify-center items-center ">
      <div class="text-xl font-bold text-center flex items-center justify-center text-red-700 h-full"
        v-show="dataOpenSideBar">Dashboard</div>
      <img src="@/assets/images/logo.png" v-show="!dataOpenSideBar" class="p-1 w-8 h-8 " alt="Avatar" />
    </div>
    <div class="flex flex-col h-[calc(100vh-3rem)] bg-stone-900">
      <div class="menu-man text-left px-2 whitespace-nowrap ">
        <div class="profile flex justify-center items-center text-center p-5 ">
          <div class="text-center  text-white" v-show="dataOpenSideBar">
            <img src="https://avatars.githubusercontent.com/u/97021587?v=4"
              class="p-1 w-24 h-24 rounded-full ring-2 ring-red-600 mb-4" alt="Avatar" />
            <h5 class="text-xl font-medium leading-tight mb-2"> My Name</h5>
            <p class="text-gray-500">Admin </p>
          </div>
        </div>
        <div class="   py-3 rounded-sm cursor-pointer text-gray-300 hover:text-white">
          <router-link to="dashboard" class="px-2 flex space-x-2"
            :class="{ 'active-link-dashboard': $route.name === 'dashboard' }"><span class="pi pi-microsoft mt-1"></span>
            <span v-show="dataOpenSideBar">Dashboard</span></router-link>
        </div>
        <div class="   py-3 rounded-md cursor-pointer  text-dirt hover:text-banana">
          <router-link to="user" class="px-2 flex space-x-2" :class="{ 'active-link-user': $route.name === 'user' }"><span
              class="pi pi-user mt-1"></span> <span v-show="dataOpenSideBar">User</span></router-link>
        </div>
        <div class="  py-3 rounded-md cursor-pointer text-gray-300 hover:text-white">
          <router-link to="/contact" class="px-2 flex space-x-2"><span class="pi pi-info-circle mt-1"></span> <span
              v-show="dataOpenSideBar">News</span></router-link>
        </div>
        <div class="   py-3 rounded-md cursor-pointer text-cnblue hover:text-navyblue">
          <router-link to="product" class="px-2 flex space-x-2"
            :class="{ 'active-link-product': $route.name === 'product' }"><span class="pi pi-cart-plus mt-1 "></span>
            <span v-show="dataOpenSideBar">Product</span></router-link>
        </div>


      </div>

    </div>
  </div>
</template>

<script setup>

const props = defineProps(['dataOpenSideBar']);

</script>

<style>
.p-tooltip-text {
  font-size: 10px !important;
}

#side-bar {
  overflow: hidden;
  transition: 300ms;
}

.side-bar-visible {
  width: 250px !important;
}

.side-bar-close {
  width: 50px !important;
}

.active-link-dashboard {
  color: #ff0000;
  /* Red color for Dashboard link */
  text-shadow: 0 0 20px #ff0000;
}

.active-link-user {
  color: #ffff00;
  /* Yellow color for User link */
  text-shadow: 0 0 20px #ffff00;
}

.active-link-news {
  color: #00ff00;
  /* Green color for News link */
  text-shadow: 0 0 20px #00ff00;

}

.active-link-product {
  color: #0000ff;
  /* Blue color for Product link */
  text-shadow: 0 0 20px #0000ff;

}
</style>
