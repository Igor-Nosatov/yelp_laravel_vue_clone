<template>
    <h1>SignUp</h1>
    <v-sheet width="600" class="mx-auto">
      <v-form @submit.prevent>
        <v-text-field v-model="form.firstName" :rules="rules" label="First Name"></v-text-field>
        <v-text-field v-model="form.lastName" :rules="rules" label="Last Name"></v-text-field>
        <v-text-field v-model="form.email" label="E-mail" type="email" required></v-text-field>
        <v-text-field v-model="form.password" label="Password" type="password"></v-text-field>
        <v-text-field v-model="form.zipCode" label="Zip Code" type="text"></v-text-field>
        <v-row>
          <v-col cols="4">
            <v-select label="Month" v-model="form.month" :items="monthOptions"></v-select>
          </v-col>
          <v-col cols="4">
            <v-select label="Day" v-model="form.day" :items="dayOptions"></v-select>
          </v-col>
          <v-col cols="4">
            <v-select label="Year" v-model="form.year" :items="yearOptions"></v-select>
          </v-col>
        </v-row>
        <v-btn type="submit" block class="mt-2 signup-button">Submit</v-btn>
      </v-form>
    </v-sheet>
  </template>

  <script>
  import { ref } from 'vue';

  export default {
    setup() {
      const form = ref({
        firstName: '',
        lastName: '',
        email: '',
        password: '',
        zipCode: '',
        month: '',
        day: '',
        year: ''
      });

      const rules = []; // Add your validation rules here

      const monthOptions = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
      ];

      const dayOptions = Array.from({ length: 31 }, (_, i) => (i + 1).toString());

      const yearOptions = Array.from({ length: 54 }, (_, i) => (1970 + i).toString());

      return {
        form,
        rules,
        monthOptions,
        dayOptions,
        yearOptions
      };
    }
  };
  </script>

  <style scoped>
  .signup-button {
    background-color: #be2020;
    height: 45px !important;
    color: rgb(245, 243, 243);
    font-weight: bold;
    font-size: 16px;
  }
  </style>
