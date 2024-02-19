<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { defineProps, ref} from 'vue';
import EmployeeLayout from '@/Layouts/EmployeeLayout.vue';

const props = defineProps([
    'empId',
    'employeeAttendance',
])

const items = ref(props.employeeAttendance);
</script>

<template>
    <Head title="Attendance" />

    <EmployeeLayout>
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="">
                        <v-data-table :headers="headers" :items="items" class="p-6 text-gray-900 dark:text-gray-100"></v-data-table>
                    </div>
                </div>
            </div>
        </div>
    </EmployeeLayout>
</template>