<!-- <script setup>

import { Link } from '@inertiajs/vue3';

</script>

<template>
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full  border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <div class="text-center">
                    
                            <Link :href="route('dashboard')" class="my-2 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                            </Link>

                            <v-divider></v-divider>
                            
                            <Link :href="route('attendance.index')" class="my-2 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">All Attendance</span>
                            </Link>
                                
                            <v-divider></v-divider>


                        <v-menu open-on-hover>
                                <template v-slot:activator="{ props }">
                                    <v-btn
                                    class="my-2"
                                    color="primary"
                                    v-bind="props"
                                    block
                                    >
                                    Employees
                                    </v-btn>
                                </template>

                                <v-list>
                                    <v-list-item>
                                        <v-list-item-title>
                                            <Link :href="route('employees.add')" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                                <span class="flex-1 ms-3 whitespace-nowrap">Add Employee</span>
                                            </Link>
                                        </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item>                            
                                        <v-list-item-title>
                                            <Link :href="route('employees.index')" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                                <span class="flex-1 ms-3 whitespace-nowrap">All Employees</span>
                                            </Link>
                                        </v-list-item-title>
                                    </v-list-item>
                                    
                                </v-list>
                        </v-menu>
                    </div>
                    
                    
                </div>
            </aside>
</template> -->

<script setup>
import { Link } from '@inertiajs/vue3';

</script>

<template>
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