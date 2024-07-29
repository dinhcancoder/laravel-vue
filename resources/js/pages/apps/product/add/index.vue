<script setup>
definePage({
  meta: {
    action: "add",
    subject: "Product Manager",
  },
});
</script>

<template>
  <div>
    <h1>Product Add</h1>
    <p v-if="$can('add', 'Product Manager')">
      Welcome to the Product Manager. Here you can view the product listings.
    </p>
    <p v-else>
      You do not have the required permissions to view the product listings.
    </p>
  </div>
</template>
