<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label>
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
<style scoped>
label{
    display: block;
    color: white;
    height: 20px;
    line-height: 20px;
}
</style>
