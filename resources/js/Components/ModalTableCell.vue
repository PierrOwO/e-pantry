<template>
    <component :is="header ? 'th' : 'td'" :class="header ? 'head' : 'body'">
        <slot />
    </component>
</template>

<script setup>
defineProps({
    header: Boolean,
});
</script>
<style scoped>
.head{
    padding: 5px;
}
.body{
    padding: 15px;
}</style>
