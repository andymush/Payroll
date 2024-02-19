<script setup>
import { Link } from '@inertiajs/vue3';


</script>

<template>
    <v-navigation-drawer>
        <v-list>
            <v-list-item 
                class="mt-5"
                prepend-avatar="https://randomuser.me/api/portraits/women/85.jpg">
                <Link 
                    :href="route('profile.edit')"
                >   
                    <v-list-item-title>{{ $page.props.auth.user.first_name }}</v-list-item-title>
                    <v-list-item-subtitle>{{ $page.props.auth.user.email }}</v-list-item-subtitle>
                </Link>

            </v-list-item>
        </v-list>
        <v-divider></v-divider>

        <v-list density="compact" nav>
            <v-list-item prepend-icon="mdi-view-dashboard">
                <Link 
                    :href="route('employee.dashboard')"
                >
                    <v-list-item-title>Dashboard</v-list-item-title>
                </Link>
            </v-list-item>
            <v-list-item prepend-icon="mdi-cash" title="Payslips"></v-list-item>
            <v-list-item prepend-icon="mdi-file" title="Documents" value="shared"></v-list-item>
            <v-list-item prepend-icon="mdi-calendar">
                <Link 
                    :href="route('employee.attendance')"
                >
                    <v-list-item-title>Attendance</v-list-item-title>
                </Link>
            </v-list-item> 
        </v-list>

        <v-btn 
            size="large"
            variant="outlined"
            color="error"
            class="ml-9 "
            >
            <Link :href="route('logout')" method="post" as="button">
                <v-icon>mdi-logout</v-icon>
                <span>Logout</span>
            </Link>
        </v-btn>

    </v-navigation-drawer>
</template>