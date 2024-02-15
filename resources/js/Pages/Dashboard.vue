<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AdminLayout>
        <div class=" pa-2 pb-0 ml-5 mt-2">
            <h4>
                <span class="text-2xl font-semibold">
                    Welcome {{ $page.props.auth.user.first_name }}!
                </span>
            </h4>
            <p class="text-dark">
                Dashboard
            </p>

            <div class="py-12">
                <v-btn>
                    <v-icon>mdi-export</v-icon>
                    <span>Export</span>
                </v-btn>
            </div>
        </div>
        
    </AdminLayout>
</template>
