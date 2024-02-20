<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { defineProps, ref} from 'vue';
import AddEmployeeForm from '@/Components/Admin/AddEmployeeForm.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    departments: Array,
}) 
console.log(props.departments)

</script>

<template>
    <Head title="Attendance" />

    <AdminLayout>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" shadow-sm sm:rounded-lg">
                    <div class="">
                        <AddEmployeeForm :departments="props.departments"/>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>