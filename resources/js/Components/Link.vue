<template>
    <span v-if="label">{{ label }}</span>
    <span v-else>no name</span>
  </template>

  <script setup>
  defineProps({
    label: String,
  });
  </script>

  <style scoped>
  span {
   font-size: 15px;
   color: white;
   cursor: pointer;
  }
  </style>
