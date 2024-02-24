<script setup >
import { ref, defineProps } from 'vue';

const props = defineProps({
    departments: Array,
})

const formData = ref({
    firstname : '',
    lastname : '',
    email : '',
    designation : '',
    department : '',
    start_date : null,
})


const submit = () => {
    axios.post(route('employees.store'), formData.value)
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
       
        class="mx-auto mt-6"
        elevation="12"
        width="90%"
        bg-color="blue"
      >
        <div class="d-flex justify-center mt-3 mb-1">
            <p class="text-h4 text-md-h4 my-3 text-decoration-underline">
              <v-icon class="mr-2">mdi-account-plus</v-icon>
              Add Employee
            </p>
        </div>
        <v-divider></v-divider>
        <p>
            Enter the details of the prospect employee and tentative start date
        </p>
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
                variant="filled"
                class="mb-6"
              ></v-text-field>

              <v-radio-group v-model="formData.department" class="ml-4">
                <v-label class="text-h5">Department</v-label>
                <v-radio v-for="(department, index) in departments" :key="index" :label="department.dept_name" :value="department.dept_id"></v-radio>
              </v-radio-group>
              
            </v-col>
            <v-col cols="10" md="6">
              <v-date-picker
                  color="primary"
                  v-model="formData.start_date"
                  label="Start Date "
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

 