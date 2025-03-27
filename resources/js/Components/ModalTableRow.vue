<template>
    <tr :class="header ? 'head' : 'body'">
        <slot></slot>
    </tr>
   </template>

   <script setup>
   defineProps({
    header: Boolean,
   })
   </script>

   <style scoped>
    tr{
     text-align: center;
   }
   .head{
    background-color: rgb(228, 137, 213);
   }
    .body:hover{
     background-color: rgb(250, 214, 244);
     cursor: pointer;
   }

   </style>
