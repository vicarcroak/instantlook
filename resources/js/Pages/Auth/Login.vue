<template>
    <Head title="Login"/>

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo/>
        </template>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email"/>
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.email"/>
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password"/>
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                />
                <InputError class="mt-2" :message="form.errors.password"/>
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox v-model:checked="form.remember" name="remember"/>
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')"
                      class="underline text-sm text-gray-600 hover:text-gray-900">
                    Forgot your password?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>

<script>
// Importing necessary components and libraries
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

// Exporting the default component
export default {
    // Declaring the components that will be used in this component
    components: {
        Head,
        Link,
        AuthenticationCard,
        AuthenticationCardLogo,
        Checkbox,
        InputError,
        InputLabel,
        PrimaryButton,
        TextInput
    },

    // Declaring the props that this component expects to receive
    props: {
        canResetPassword: {
            type: Boolean
        },
        status: {
            type: String
        }
    },

    // Declaring the data object for this component
    data() {
        return {
            // Using the useForm hook to create a form object
            form: useForm({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    // Declaring the methods that this component will use
    methods: {
        // Method for submitting the login form
        submit() {
            // Using the transform method to modify the form data before posting it
            this.form.transform(data => ({
                ...data,
                remember: this.form.remember ? 'on' : ''
            })).post(route('login'), {
                // Resetting the password field after the form is finished posting
                onFinish: () => this.form.reset('password')
            });
        }
    }
}
</script>

