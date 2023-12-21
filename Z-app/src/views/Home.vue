<template>
    <section>
        <div>
            <form @submit.prevent="addProduct()">
                <div>
                    <label>Name</label>
                    <input type="text" v-model="newProduct.name">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="" id="" cols="30" rows="10" v-model="newProduct.description"></textarea>
                </div>
                <div>
                    <label>units</label>
                    <input type="number" v-model="newProduct.units">
                </div>
                <div>
                    <label>price</label>
                    <input type="number" v-model="newProduct.price">
                </div>
                <div>
                    <label>Category</label>
                    <input type="text" v-model="newProduct.category">
                </div>


                <button type="submit">Add Item</button>
            </form>
        </div>
    </section>


    <!-- <div>
        <ul>
            <li v-for="product in products" >{{ product.name }}  <button>delete</button></li>
        </ul>
    </div>
    <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1> -->

</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useProductStore } from '../stores/index';

const productStore = useProductStore()
const products = ref([]);

const newProduct = ref({
    name: '',
    description: '',
    units: '',
    price: '',
    category: ''
})



onMounted(async() => {

    await productStore.fetchItems();
    products.value = productStore.products;

});

const addProduct = async () => {

    await productStore.createItem(newProduct)

    newProduct.value = {
        name: '',
        description: '',
        units: '',
        price: '',
        category: ''
    };

    await productStore.fetchItems();
    products.value = productStore.products;
}

const deleteProduct = async (itemId) => {
    await productStore.deleteItem(itemId);
    await productStore.fetchItems();
    products.value = productStore.products;
}




</script>
