<template>
    <button class="btn" v-if="label">{{ label }}</button>
    <button class="btn" v-else>no name</button>
  </template>

  <script setup>
  defineProps({
    label: String,
  });
  </script>

  <style scoped>
  .btn {
    color: white;
    height: 50px;
    line-height: 50px;
    width: 100%;
    border-radius: 5px;
    transition: 0.25s;
  }
  </style>
