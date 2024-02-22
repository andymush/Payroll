<script setup >
import { ref, defineProps } from 'vue';

const props = defineProps({
    departments: Array,

})
console.log(props.departments);

const departmentNames = props.departments.map(department => department.dept_name);
const departmentIds = props.departments.map(department => department.dept_id);



const formData = ref({
    firstname : '',
    lastname : '',
    email : '',
    designation : '',
    Department : '',
    start_date : null,
})


const submit = () => {
    console.log(formData);
    axios.post(route('employees.store'), formData)
        .then(response => {
            console.log(response);
        })
        .catch(error => {
            console.log(error);
        })
}


</script>

<template>
    <div class="text-center">
      <v-sheet
        :class="rounded-xl"
        class="mx-auto mt-6"
        elevation="12"
        width="90%"
        bg-color="blue"
      >
        <div class="d-flex justify-center mt-3 mb-4">
            <p class="text-h4 text-md-h4 my-3 text-decoration-underline">Add Employee</p>
        </div>
        <v-form class="pa-5">
          <v-row>
            <v-col cols="9" md="6" >
              <v-text-field
                v-model="formData.firstname"
                :counter="10"
                label="First name *"
                variant="filled"
                required
              ></v-text-field>
              <v-text-field
                v-model="formData.lastname"
                :counter="10"
                label="Last name *"
                variant="filled"
                required
                
              ></v-text-field>
              <v-text-field
                v-model="formData.email"
                label="E-mail *"
                required
                type="email"
                variant="filled"
              ></v-text-field>
            
              <v-text-field
                v-model="formData.designation"
                :counter="10"
                label="Designation *"
                required
                hide-details
                variant="filled"
                class="mb-6"
              ></v-text-field>

              <v-select
              v-model="formData.Department"
              label="Department"
              :items="departmentNames"
              :item-value="(item, index) => departmentIds[index]"
              required
              variant="filled"
              hint="Please select a department"
              ></v-select>
              
            </v-col>
            <v-col cols="10" md="6">
              <v-date-picker
                  color="primary"
                  v-model="formData.start_date"
                  label="Date of Birth"
                  required
              ></v-date-picker>
            </v-col>
          </v-row>
          <v-btn
            color="primary"
            class="mr-4 mb-4"
            @click="submit"
            width="50%"
          > Submit </v-btn>
        
        </v-form>
      </v-sheet>
    </div>
    
  </template>

 