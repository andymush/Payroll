<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import Sidebar from '@/Components/Admin/Sidebar.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <!-- <v-app>
        <v-app-bar app>
        Title
        </v-app-bar>

        <v-navigation-drawer
            color="primary"
            permanent
            expand-on-hover
            app
        >
            <v-divider></v-divider>
            <v-list nav dense>
                <v-list-item link href="#">
                    <v-list-item-icon>
                        <v-icon color="white" small>mdi-lightbulb</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title class="title">Blue</v-list-item-title>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-main>
            <v-container fluid class="page-wrapper pb-sm-15 pb-10">
                <slot />
            </v-container>
        </v-main>
    </v-app> -->

    <v-app >
        <v-navigation-drawer>
        <v-list>
          <v-list-item
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
          <v-list-item prepend-icon="mdi-folder" title="My Files" value="myfiles"></v-list-item>
          <v-list-item prepend-icon="mdi-account-multiple" title="Shared with me" value="shared"></v-list-item>
          <v-list-item prepend-icon="mdi-star" title="Starred" value="starred"></v-list-item>
        </v-list>

        <v-btn 
            size="large"
            variant="outlined"
            color="error"
            class="ml-9 "
            >
            <Link :href="route('logout')" method="post">
                <v-icon>mdi-logout</v-icon>
                <span>Logout</span>
            </Link>
        </v-btn>

        </v-navigation-drawer>
        <v-main>
            <v-container fluid class="page-wrapper pb-sm-15 pb-10">
                <slot />
            </v-container>
        </v-main>
    </v-app>
</template>
