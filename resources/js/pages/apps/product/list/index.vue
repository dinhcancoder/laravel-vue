<script setup>
import { $apiTest } from "@/utils/api";

definePage({
  meta: {
    action: "list",
    subject: "Product Manager",
  },
});

const getAllProducts = async () => {
  try {
    const res = await $apiTest("products", {
      method: "GET",
    });

    return res.products;
  } catch (error) {
    console.log(error);
  }
};

const products = await getAllProducts();
</script>

<template>
  <div>
    <h1>Product List</h1>
    <ul>
      <li v-for="product in products">{{ product.title }}</li>
    </ul>
  </div>
</template>
