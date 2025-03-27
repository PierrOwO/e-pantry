<script setup>
import Button from '@/Components/Button.vue';
defineProps({
    title: String,
    b1: Boolean,
    b2: Boolean,
  });
</script>
<template>
    <div class="modal">
        <div class="content">
            <div class="header">
                <span v-if="title">{{ title }}</span>
                <span v-else>Modal title</span>
            </div>
            <div class="body">
                <slot></slot>
            </div>
            <div class="footer">
                <Button v-if="b1" class="button-footer background-color-orange" label="orange"/>
                <Button v-if="b2" class="button-footer background-color-green" label="green"/>
                <Button class="button-footer background-color-red" label="red"/>
            </div>
        </div>
    </div>
</template>
<style scoped>
.modal {
    position: absolute;
    z-index: 1000;
    background-color: rgb(0, 0, 0, 0.4);
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.modal .content{
    width: 80%;
    height: 80%;
    display: flex;
    border-radius: 5px;
    flex-direction: column;
    background-color: white;
    overflow: hidden;
}
.modal .content .header{
    width: 100%;
    height: 50px;
    line-height: 50px;
    background-color: rgb(228, 228, 228);
}
.modal .content .header span{
    margin-left: 15px;
    font-size: 20px;
}
.modal .content .body{
    width: 100%;
    overflow-y: auto;
    flex: 1;
}
.modal .content .footer{
    width: 100%;
    height: 50px;
    line-height: 50px;
    background-color: rgb(228, 228, 228);
    display: flex;
    justify-content: end;
    align-items: center;
}
.button-footer {
    width: 70px;
    margin-right: 5px;
    height: 40px;
    line-height: 40px;
}
.background-color-red{
    background-color: rgb(211, 58, 58);
}
.background-color-red:hover{
    background-color: rgb(191, 54, 54);
}
.background-color-red:active{
    background-color: rgb(172, 55, 55);
}
.background-color-green{
    background-color: rgb(70, 182, 53);
}
.background-color-green:hover{
    background-color: rgb(63, 160, 48);
}
.background-color-green:active{
    background-color: rgb(54, 135, 41);
}
.background-color-orange{
    background-color: rgb(205, 120, 41);
}
.background-color-orange:hover{
    background-color: rgb(184, 107, 35);
}
.background-color-orange:active{
    background-color: rgb(159, 91, 28);
}
</style>
