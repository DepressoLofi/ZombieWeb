<template>
    <div class="p-10 w-full flex justify-center">
        <div class="w-[70rem]">
            <div class="flex w-full justify-between mb-10">
                <div class="text-3xl font-bold">Product List</div>
                <div class="flex">
                    <button class="bg-blue-900 hover:bg-blue-950 text-white font-bold py-2 px-2 rounded flex items-center">
                        <p>Export</p>
                        <i class="pi pi-file-export mt-1 ms-2"></i>
                    </button>
                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-2 rounded flex items-center ms-2">
                        <p>Create Product </p>
                        <i class="pi pi-plus-circle mt-1 ms-2"></i>
                    </button>
                </div>

            </div>
            <div class="bg-stone-800 w-full border border-red-800 mt-3 rounded p-6">
                <div class="flex w-full justify-between">
                    <div class="flex w-72">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="pi pi-search text-black"></i>
                            </div>
                            <input type="text" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search">
                        </div>
                    </div>
                    <div class="flex">
                        <select v-model="selected" class="block w-32 p-2 text-sm text-gray-900 border border-gray-300 rounded bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                            <option disabled value="">Category</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                        <button class="block w-32 p-2 text-sm text-gray-900 border border-gray-300 rounded bg-gray-50 hover:bg-gray-200 active:bg-gray-300 ms-2" @click="sorting">{{ sort }}<i class="pi pi-sort-alt ms-1 text-black"></i></button>

                    </div>

                </div>
                <hr class="h-px my-8 bg-red-800 border-0 ">
                <div class="flex justify-center w-full">
                    <div class="w-full grid grid-cols-4 gap-3 ">
                        <div class="max-w-sm rounded overflow-hidden bg-stone-500 shadow-lg">
                            <img class="w-full h-[180px]" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                                 <p class="text-gray-700 text-base">
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                 </p>
                            </div>

                        </div>
                        <div class="bg-navyblue">2</div>
                        <div class="bg-navyblue">3</div>
                        <div class="bg-navyblue">4</div>
                        <div class="bg-navyblue">5</div>
                        <div class="bg-navyblue">5</div>
                        <div class="bg-navyblue">5</div>
                        <div class="bg-navyblue">5</div>

                    </div>

                </div>



            </div>

        </div>





    </div>

</template>

<script setup>

import { ref } from 'vue';

const selected = ref('');
const sort = ref('last created')

const sorting = () => {
    if (sort.value == 'last created') {
        sort.value = 'sort by name'
    } else {
        sort.value = 'last created'
    }
}

</script>

<style>

</style>
