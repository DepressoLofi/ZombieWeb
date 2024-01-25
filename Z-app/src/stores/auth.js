import { defineStore } from 'pinia';
import axios from 'axios';

const baseUrl = `${import.meta.env.VITE_API_BASE_URL}`;

export const useAuthStore = defineStore('auth', {
    state: () => ({
        token: '',
        email: '',
        username: '',
        role: ''
    }),
    getters: {
        getToken() {
            return this.token;
        },
        getRole() {
            return this.role;
        },
    },
    actions: {
        setToken(token) {
            this.token = token;
        },
        setRole(role) {
            this.role = role
        },
        clearToken() {
            this.token = '';
            this.email = '';
            this.role = '';
            this.username = '';
        },
        async userRegister(email, username, password) {
            try {
                const response = await axios.post(baseUrl + '/register', {
                    email: email,
                    username: username,
                    password: password
                });
                const data = response.data;

                if (data.token) {
                    this.setToken(data.token);
                    this.setRole('user');
                    this.email = email;
                    this.username = username;
                    return true;
                } else {
                    console.error('Registration failed:', data.error || 'Unknown error');
                    return false;
                }
            } catch (error) {
                console.error('Registration failed:', error);
                return false;

            }

        },
        async sellerRegister(email, username, password) {

        },
        async login(email, password) {
            try {
                const response = await axios.post(baseUrl + '/login', {
                    email: email,
                    password: password
                })
                const data = response.data;
                if (data.token) {
                    this.setToken(data.token);
                    this.setRole(data.role)
                    this.email = email;
                    this.username = (data.username);
                    return true;
                } else {
                    console.error('Login failed:', 'Invalid credentials');
                    return false;
                }
            } catch (error) {
                console.error('Login failed:', error);
                return false;
            }

        }



    }
})