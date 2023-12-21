import { defineStore } from 'pinia';
import axios from 'axios';

const baseUrl = `${import.meta.env.VITE_API_BASE_URL}/products`;

export const useProductStore = defineStore('items', {
    state: () => ({
        products: [],
    }),
    actions: {
        async fetchItems() {
            try {
                const response = await axios.get(baseUrl);

                this.products = response.data.products;
            } catch (error) {
                console.error('Error fetching items', error);
            }
        },

        async createItem(newItem) {
            try {

                const response = await axios.post(baseUrl, newItem.value);
            } catch(error) {
                console.log('Error updating item:', error);
            }
        },
        async updateItem(itemId, updatedData){
            try{
                
                await axios.put(baseUrl + `/${itemId}`, updatedData)
            }
            catch (error){
                console.error('Error updating item:', error);
            }
        },
        async deleteItem(itemId){
            try {
                await axios.delete(baseUrl + `/${itemId}`);
            } catch(error) {
                console.error('Error deleting item:', error);
            }
        }
    }
})