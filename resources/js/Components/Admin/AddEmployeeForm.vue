<script setup >
import { ref, defineProps } from 'vue';

const props = defineProps({
    departments: Array,

})
console.log(props.departments)
const departmentNames = props.departments.map(department => department.dept_name);
const departmentIds = props.departments.map(department => department.id);
const selectedDepartment = ref('');

const firstname = ref('');
const lastname = ref('');
const email = ref('');
const designation = ref('');
const Department = ref('');


</script>

<template>
    <div class="d-flex justify-center mt-5">
        <p class="text-h6 text-md-h5 text-lg-h5">Add Employee</p>
    </div>
    <v-form >
      <v-container>
        <v-row>
          <v-col cols="12" md="4">
            <v-text-field
              v-model="firstname"
              :counter="10"
              label="First name"
              variant="filled"
              required
            ></v-text-field>
          </v-col>
  
          <v-col cols="12" md="4">
            <v-text-field
              v-model="lastname"
              :counter="10"
              label="Last name"
              variant="filled"
              required
              
            ></v-text-field>
            <v-text-field
                label="Contact lastname *"
                v-model="contact_lastname"
                variant="filled"
                required
            ></v-text-field>
          </v-col>
  
          <v-col cols="12" md="4">
            <v-text-field
              v-model="email"
              label="E-mail"
              required
              variant="filled"
            ></v-text-field>
          </v-col>

        </v-row>

        <v-row>
          <v-col cols="12" md="4">
            <v-text-field
              v-model="designation"
              :counter="10"
              label="Designation"
              required
              hide-details
              variant="filled"
            ></v-text-field>
          </v-col>
  
          <v-col cols="12" md="4">
            <v-select
            v-model="selectedDepartment"
            label="Department"
            :items="departmentNames"
            :item-value="(item, index) => departmentIds[index]"
            required
            variant="filled"

            ></v-select>
          </v-col>
        </v-row>
        <v-row>
          <v-col cols="12" md="4">
            <v-date-picker
                    color="primary"
                ></v-date-picker>
          </v-col>
          
        </v-row>
      </v-container>
    </v-form>
  </template>

 