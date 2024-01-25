<template>
    <div>
        <form @submit.prevent="register" class="max-w-md mx-auto mt-8">
            <div>
                <label>Username: </label>
                <input v-model="username" type="text" id="username"
                    class="w-full border text-black rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" />

            </div>
            <div>
                <label>Email: </label>
                <input v-model="email" type="text" id="email"
                    class="w-full border text-black rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" />

            </div>
            <div>
                <label>Password: </label>
                <input v-model="password" type="password" id="password"
                    class="w-full border text-black rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" />
            </div>

            <button type="submit"
                class="bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-pink active:bg-yellow-600">Register</button>

            <p v-if="errorMessage" class="text-red-500 mt-2">{{ errorMessage }}</p>



        </form>

    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useAuthStore } from '@/stores/index';
import router from '@/router';


const authStore = useAuthStore();

const username = ref('');
const email = ref('');
const password = ref('');
var errorMessage = ref('');


const register = async () => {
    try {
        const success = await authStore.userRegister(
            email.value, username.value, password.value);
        if (success) {
            router.push({ name: 'home' });

        } else {

            errorMessage = 'Invalid email or password. Please try again.';
        }

    } catch (error) {
        console.error('Register failed:', error);
        errorMessage = 'An error occurred during login. Please try again later.';

    }



}



</script>