<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import PantrySelector from '@/Components/PantrySelector.vue';
import Modal from '@/Components/Modal.vue';
import { Head } from '@inertiajs/vue3';
import axios from 'axios';
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout>
        <Modal title="modal small title" :b1="1" :b2="1"/>
    </AppLayout>
</template>
