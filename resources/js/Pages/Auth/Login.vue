<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Button from '@/Components/Button.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
//import Link from '@/Components/Link.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Login" />

    <GuestLayout>
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="background-color-maroon"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />
            </div>
            <div>
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="background-color-maroon"
                    v-model="form.password"
                    required
                />
            </div>
            <Button class="background-color-maroon background-color-maroon-hover width-75 margin-bottom-10px margin-top-10px" label="Login"/>
            <div class="links-div">
                <Link class="margin-right-auto display-inline color-maroon color-maroon-hover font-weight-500" >Reset password </Link>
                <Link class="margin-left-auto display-inline color-maroon color-maroon-hover font-weight-bold" :href="route('register')">Register</Link>

            </div>
        </form>
    </GuestLayout>
</template>
<style scoped>
.links-div{
    display: flex;
    align-items: center;

}
.display-inline{
    display: inline;
}
.margin-right-auto{
    margin-right: auto;
}
.margin-left-auto{
    float: right;
}
.color-maroon{
    color: #85586F;
}.color-maroon-hover:hover{
    color: rgb(98, 47, 74);;
}
.font-weight-500{
    font-weight: 500;
}
.font-weight-bold{
    font-weight: bold;
}
.background-color-maroon{
    background-color: #85586F;
    color: white;

}
.background-color-maroon-hover:hover,
.background-color-maroon:focus{
    background-color: rgb(98, 47, 74);
}
.width-75{
    width: 75%;
}
.margin-bottom-20px{
    margin-bottom: 20px;
}
.margin-top-10px{
    margin-top: 20px;
}
.margin-bottom-10px{
    margin-bottom: 10px;
}
form {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  height: auto;
  background-color: #ffa0a0;
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
form div{
    margin-bottom: 10px;
    width: 75%;
}
form div:first-child{
    margin-top: 30px;

}
form div:last-child{
        margin-bottom: 30px;
}
</style>
