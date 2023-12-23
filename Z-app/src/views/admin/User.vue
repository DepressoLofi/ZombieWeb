<template>
    <div class="w-full p-10 flex justify-center">
    <div class="cotainer w-[70rem] ">
        <div class="flex mb-10 justify-between">
            <div class="text-3xl font-bold ">User List</div>

            <button class="bg-blue-900 hover:bg-blue-950 text-white font-bold py-2 px-2 rounded flex items-center">
                <p>Export</p>
                <i class="pi pi-file-export mt-1 ms-2"></i>
            </button>


        </div>

        <div class="bg-stone-800 w-full border border-red-800 mt-4 rounded p-6">
                    <div class="flex w-full justify-between">
                        <div class="flex w-72">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <i class="pi pi-search text-black"></i>
                                </div>
                                <input type="text" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search">
                            </div>
                        </div>


                    </div>
                    <hr class="h-px my-8 bg-red-800 border-0 ">
                    <div class="mx-16 ">
                        <table class="w-full text-left text-sm">
                            <thead class="text-xs uppercase text-white bg-stone-900 p-8">
                                <tr>
                                    <th scope="col"  class="w-60 px-6 py-3">Username</th>
                                    <th scope="col" class="w-80 px-6 py-3">Email</th>
                                    <th scope="col" class="w-64 px-6 py-3">Joined At</th>
                                    <th scope="col"  class="w-32 px-6 py-3">Action</th>
                                </tr>

                            </thead>
                            <tbody class="text-black bg-white">
                                <tr class="border-b-2">
                                    <td class="px-6 py-3">Min Kyaw Zwar</td>
                                    <td class="px-6 py-3">minkyawzwat@gmail.com</td>
                                    <td class="px-6 py-3">19th december 2022</td>
                                    <td class="px-6 py-3">
                                        <button class="bg-red-500 hover:bg-red-700 text-sm text-white font-bold py-1 px-2 rounded">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b-2">
                                        <td class="px-6 py-3">Min Kyaw Zwar</td>
                                        <td class="px-6 py-3">minkyawzwat@gmail.com</td>
                                        <td class="px-6 py-3">19th december 2022</td>
                                        <td class="px-6 py-3">
                                            <button class="bg-red-500 hover:bg-red-700 text-sm text-white font-bold py-1 px-2 rounded">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-b-2">
                                        <td class="px-6 py-3">Min Kyaw Zwar</td>
                                        <td class="px-6 py-3">minkyawzwat@gmail.com</td>
                                        <td class="px-6 py-3">19th december 2022</td>
                                        <td class="px-6 py-3">
                                            <button class="bg-red-500 hover:bg-red-700 text-sm text-white font-bold py-1 px-2 rounded">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-b-2">
                                        <td class="px-6 py-3">Min Kyaw Zwar</td>
                                        <td class="px-6 py-3">minkyawzwat@gmail.com</td>
                                        <td class="px-6 py-3">19th december 2022</td>
                                        <td class="px-6 py-3">
                                            <button class="bg-red-500 hover:bg-red-700 text-sm text-white font-bold py-1 px-2 rounded">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>



                            </tbody>
                        </table>
                    </div>




                </div>
    </div>
    </div>

</template>

<script>
export default {

}
</script>

<style>

</style>
