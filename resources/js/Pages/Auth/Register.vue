<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Button from '@/Components/Button.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';

import { Head, Link, useForm } from '@inertiajs/vue3';


const form = useForm({
    email: '',
    password: '',
    password_confirmation: '',
    name: '',
    last_name: '',
});

const submit = () => {
    console.log(form);
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
  <GuestLayout>
        <Head title="Register" />
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
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div>
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="background-color-maroon"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>
            <div>
                <InputLabel for="password_confirmation" value="Confirm password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="background-color-maroon"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />
            </div>
            <InputError class="mt-2" :message="form.errors.password_confirmation" />
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="background-color-maroon"
                    v-model="form.name"
                    required
                    autocomplete="name"
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>
            <div>
                <InputLabel for="last_name" value="Last name" />

                <TextInput
                    id="last_name"
                    type="text"
                    class="background-color-maroon"
                    v-model="form.last_name"
                    required
                    autocomplete="last-name"
                />
                <InputError class="mt-2" :message="form.errors.last_name" />
            </div>
            <Button class="background-color-maroon background-color-maroon-hover width-75 margin-bottom-30px margin-top-10px" label="Register"/>

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
.margin-bottom-30px{
    margin-bottom: 30px;
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
    margin-bottom: -10px;
}
</style>
