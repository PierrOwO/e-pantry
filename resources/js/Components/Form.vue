<template>
   <form>

   </form>
  </template>

  <script setup>
  defineProps({
    label: String,
  });
  </script>

  <style scoped>
  form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 400px;
    background-color: #fff;
    display: flex;
    flex-direction: column;
  }
  </style>
