<template>
    <div class=" w-full h-screen relative">
        <div class="flex absolute h-full w-4/6 mx-10">
            <div class="w-2/6 flex flex-col justify-center items-center h-screen pb-20">
                <img src="../assets/images/404pic.png" alt="404" width="300">
                <h1 class="text-center redsign text-4xl text-amber-500">Page Not Found</h1>
                <hr>
            </div>

            <div class="w-3/6 ms-16 flex justify-center items-center pb-2">
                <div>
                    <p class="content tracking-widest text-3xl leading-relaxed"> <span class="text-6xl"><font-awesome-icon
                                icon="fa-solid fa-biohazard" spin style="color: #428a24;" /></span> It's looks like a zombie
                        has eaten this page. Get back to safe zone, quick!</p>
                    <div class="flex justify-end pe-20 mt-8 mb-2 ps-40">

                        <button type="submit" @click="goHome()"
                            class=" z-50  rounded-md neon-button hover:bg-purple-600 bg-purple-700 px-3 py-1.5 text-sm font-semibold leading-6 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back
                            to home!
                        </button>
                    </div>
                </div>



            </div>
        </div>
        <div>

        </div>
        <div>
            <img class="absolute bottom-[50px] right-0 w-[50rem]" src="../assets/images/zombiehand.png">
        </div>

    </div>
</template>

<script>
export default {
    methods: {
        goHome() {
            this.$router.push({ path: '/' })
        }
    }


}

</script>

<style>
.redsign {
    font-family: 'Space Mono', monospace;
}

.content {
    font-family: 'Roboto Condensed', sans-serif;
}

.neon-button {
    box-shadow: 0 0 5px #6d28d9, 0 0 25px #6d28d9;
}

.neon-button:hover {
    box-shadow: 0 0 5px #9333ea, 0 0 25px #9333ea, 0 0 40px #9333ea;
}
</style>