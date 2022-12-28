<template>
    <!-- Title -->
    <Head title="Login"/>

    <!-- Main Section (OLD) -->
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

    <!-- Main Section -->
    <nav class="panel-menu" id="mobile-menu">
        <ul>

        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">
                Close
                <div class="tt-icon">
                    <svg>
                        <use xlink:href="#icon-cancel"></use>
                    </svg>
                </div>
            </div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <main class="tt-offset-none" id="tt-pageContent">
        <div class="container">
            <div class="tt-loginpages-wrapper">
                <div class="tt-loginpages">
                    <a class="tt-block-title" href="index-2.html">
                        <img alt="" src="images/logo.png">
                        <div class="tt-title">
                            Welcome to Forum19
                        </div>
                        <div class="tt-description">
                            Log into your account to unlock true power of community.
                        </div>
                    </a>
                    <form class="form-default">
                        <div class="form-group">
                            <label for="loginUserName">Username</label>
                            <input class="form-control" id="loginUserName" name="name" placeholder="azyrusmax" type="text">
                        </div>
                        <div class="form-group">
                            <label for="loginUserPassword">Password</label>
                            <input class="form-control" id="loginUserPassword" name="name" placeholder="************"
                                   type="password">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="checkbox-group">
                                        <input id="settingsCheckBox01" name="checkbox" type="checkbox">
                                        <label for="settingsCheckBox01">
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            <span class="tt-text">Remember me</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col ml-auto text-right">
                                <a class="tt-underline" href="#">Forgot Password</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <a class="btn btn-secondary btn-block" href="#">Log in</a>
                        </div>
                        <p>Or login with social network</p>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <a class="btn btn-color01 btn-secondary btn-block" href="#">
                                        <i>
                                            <svg class="icon">
                                                <use xlink:href="#facebook-f-brands"></use>
                                            </svg>
                                        </i>
                                        Facebook
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <a class="btn btn-color02 btn-block" href="#">
                                        <i>
                                            <svg class="icon">
                                                <use xlink:href="#twitter-brands"></use>
                                            </svg>
                                        </i>
                                        Twitter
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p>Don’t have an account? <a class="tt-underline" href="#">Signup here</a></p>
                        <div class="tt-notes">
                            By Logging in, signing in or continuing, I agree to
                            Forum19’s <a class="tt-underline" href="#">Terms of Use</a> and <a class="tt-underline"
                                                                                               href="#">Privacy
                            Policy.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
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
    },

    // Include CSS & JS using Vue Meta
    metaInfo: {
        link: [
            {
                rel: "stylesheet",
                href: "",
            }
        ],
        script: [
            {
                src: "/hehe/test.js",
                async: true,
                defer: true
            }
        ],
    }
}
</script>

