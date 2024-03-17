<script setup>
    import Checkbox from '@/Components/Checkbox.vue';
    import GuestLayout from '@/Layouts/GuestLayout.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    import { Head, Link, useForm } from '@inertiajs/vue3';
    import { defineProps, ref } from 'vue';

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
    const isPasswordVisible = ref(false)
</script>

<template>
    <div class="auth-wrapper d-flex align-center justify-center pa-4">
        <v-card
            class="auth-card pa-4 pt-4"
            max-width="448"
        >
            <v-card-item class="justify-center">
            <template #prepend>
                <div class="d-flex">
                <div
                    class="d-flex text-primary"
                    v-html="logo"
                />
                </div>
            </template>

            <v-card-title class="text-2xl font-weight-bold">
                Payroll
            </v-card-title>
            </v-card-item>

            <v-card-text class="pt-2 text-center">
            <h5 class="text-h5 mb-1">
                Welcome to Payroll 👋🏻
            </h5>
            <p class="mb-0">
                Please sign-in to your account
            </p>
            </v-card-text>

            <v-card-text>
            <div v-if="status" class="mb- font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <form @submit.prevent="submit">
                <v-row>
                <!-- email -->
                <v-col cols="12">
                    <v-text-field
                    v-model="form.email"
                    label="Email"
                    type="email"
                    required
                    autofocus
                    autocomplete="email"
                    />
                    <InputError class="mt-2" :message="form.errors.email" />
                </v-col>

                <!-- password -->
                <v-col cols="12">
                    <v-text-field
                    v-model="form.password"
                    label="Password"
                    auto-complete="current-password"
                    :type="isPasswordVisible ? 'text' : 'password'"
                    :append-inner-icon="isPasswordVisible ? 'mdi-eye-off' : 'mdi-eye'"
                    @click:append-inner="isPasswordVisible = !isPasswordVisible"
                    />
                    <InputError class="mt-2" :message="form.errors.password" />
                    <div class="block">
                        <v-checkbox 
                            label="Remember me"
                            v-model:checked="form.remember" 
                        />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="underline text-sm text-gray-600 dark:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    >
                        Forgot your password?
                    </Link>

                    <v-btn color="primary" class="ms-4" 
                        :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                        @click="submit"
                        >
                        Log in
                    </v-btn>
                </div>
                </v-col>
                <!-- auth providers -->
                <v-col
                    cols="12"
                    class="text-center"
                >
                    <AuthProvider />
                </v-col>
                </v-row>
            </form>
            </v-card-text>
        </v-card>
    </div>
</template>


