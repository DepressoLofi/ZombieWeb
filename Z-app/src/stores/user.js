import { defineStore } from 'pinia';
import axios from 'axios';

const baseUrl = `${import.meta.env.VITE_API_BASE_URL}/users`;

export const useUserStore = defineStore('user', {
    state: () => ({
        users: [],
    }),
    actions: {
        async fetchUsers() {
            try {
                const response = await axios.get(baseUrl);
                this.users = response.data.users;
            } catch (error) {
                console.log(error);
            }
        },

        async removeUser(user) {
            try {
                const userLink = baseUrl + "/" + user.id;
                await axios.delete(userLink);
            } catch (error) {
                console.log(error);
            }
        }
    }

})
