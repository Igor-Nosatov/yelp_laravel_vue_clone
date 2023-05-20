<template>
    <h1>SignUp</h1>
    <v-sheet width="600" class="mx-auto">
      <v-form @submit.prevent>
        <v-text-field v-model="form.email" label="E-mail" type="email" required></v-text-field>
        <v-text-field v-model="form.password" label="Password" type="password"></v-text-field>
        <v-btn type="submit" block class="mt-2 signup-button">Submit</v-btn>
      </v-form>
    </v-sheet>
  </template>

  <script>
  import { ref } from 'vue';

  export default {
    setup() {
      const form = ref({
        email: '',
        password: ''
      });

      const rules = []; // Add your validation rules here

      return {
        form,
        rules
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
