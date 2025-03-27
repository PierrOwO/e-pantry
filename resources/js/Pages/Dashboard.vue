<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import PantrySelector from '@/Components/PantrySelector.vue';
import Modal from '@/Components/Modal.vue';
import ModalSmall from '@/Components/ModalSmall.vue';
import { Head } from '@inertiajs/vue3';
import axios from 'axios';
import ModalBody from '@/Components/ModalBody.vue';
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout>
        <Modal title="modal title" b1 b2>
            <ModalBody :body="1"/>
        </Modal>
    </AppLayout>
</template>
<style scoped>
</style>
