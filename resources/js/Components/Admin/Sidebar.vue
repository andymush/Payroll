<script setup>
    import { Link } from '@inertiajs/vue3';
    import { ref } from 'vue';

    const drawer = ref(null);
    const menu = ref(false);

    
</script>

<template>
    <v-app-bar
        color="primary"
        prominent
      >
        <v-app-bar-nav-icon variant="text" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>

        <v-toolbar-title>Payroll System </v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon="mdi-magnify" variant="text"></v-btn>
        <v-menu
            v-model="menu"
            :close-on-content-click="false"
            location="end"
            >
            <template v-slot:activator="{ props }">
                <v-btn
                color="indigo"
                v-bind="props"
                icon="mdi-dots-vertical" 
                >
                </v-btn>
            </template>

            <v-card min-width="300" class="text">
                <v-list>
                    <v-list-item
                        prepend-avatar="https://randomuser.me/api/portraits/women/85.jpg">
                        
                        <v-list-item-title>{{ $page.props.auth.user.first_name }} </v-list-item-title>
                        <v-list-item-subtitle>{{ $page.props.auth.user.email }}</v-list-item-subtitle>
                        
                    </v-list-item>
                </v-list>

                <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn 
                    variant="outlined"
                    color="primary"
                    >
                    <v-tooltip
                        activator="parent"
                        location="bottom"
                    >Edit Profile</v-tooltip>
                    <Link 
                        :href="route('profile.edit')"
                    >
                        <v-icon>mdi-account-edit</v-icon>
                    </Link>
                </v-btn>

                <v-divider></v-divider>

                <v-btn 
                    variant="outlined"
                    color="error"
                    >
                    <v-tooltip
                        activator="parent"
                        location="bottom"
                    >Logout</v-tooltip>
                    <Link :href="route('logout')" method="post" as="button">
                        <v-icon>mdi-logout</v-icon>
                    </Link>
                </v-btn>
                </v-card-actions>
            </v-card>
        </v-menu>
      </v-app-bar>

      <v-navigation-drawer
        v-model="drawer"
        location="left"
      >
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
            <v-list-item prepend-icon="mdi-view-dashboard">
                <Link 
                    :href="route('dashboard')"
                >
                    <v-list-item-title>Dashboard</v-list-item-title>
                </Link>
            </v-list-item>
            <v-list-item prepend-icon="mdi-account-multiple">
                <v-menu
                    open-on-hover
                >
                    <template v-slot:activator="{ props }">
                        
                    <v-list-item-title
                        v-bind="props"
                    >
                        Employees
                    </v-list-item-title>

                    </template>
                    <v-list>
                        <v-list-item >
                            <Link 
                                :href="route('employees.index')"
                            >
                                <v-list-item-title>Employees List</v-list-item-title>
                            </Link>
                        </v-list-item>
                        <v-list-item>
                            <Link 
                                :href="route('employees.add')"
                            >
                                <v-list-item-title>Add Employee</v-list-item-title>
                            </Link>
                        </v-list-item>
                    </v-list>
                </v-menu>
            </v-list-item>
            <v-list-item prepend-icon="mdi-calendar">
                <Link 
                    :href="route('employees.attendance')"
                >
                    <v-list-item-title>Attendance</v-list-item-title>
                </Link>
            </v-list-item>
            <v-list-item prepend-icon="mdi-cash">
                <Link 
                    
                >
                    <v-list-item-title>Payslips</v-list-item-title>
                </Link>
            </v-list-item>

        </v-list>
      </v-navigation-drawer>
</template>