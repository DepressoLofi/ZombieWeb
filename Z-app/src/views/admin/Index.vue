<template>
  <div class="h-full w-full">
    <button @click="visible = true">Show</button>

    <Dialog v-model:visible="visible" :modal="true" header="Create Product" :style="{ width: '50rem' }"
      class="bg-gray-700" :breakpoints="{ '1199px': '75vw', '575px': '90vw' }">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </Dialog>
  </div>
</template>

<script setup>
import { ref } from "vue";

const visible = ref(false);
</script>

<style></style>
