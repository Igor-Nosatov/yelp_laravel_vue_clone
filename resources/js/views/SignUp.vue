<template>
  <h1>SignUp</h1>
  <v-sheet width="600" class="mx-auto">
    <v-form @submit.prevent>
      <v-text-field
        v-model="firstName"
        :rules="rules"
        label="First Name"
      ></v-text-field>
      <v-text-field
        v-model="lastName"
        :rules="rules"
        label="Last Name"
      ></v-text-field>
      <v-text-field
      v-model="email"
      label="E-mail"
      type="email"
      required
    ></v-text-field>
    <v-text-field
        v-model="password"
        label="Password"
        type="password"
      ></v-text-field>
      <v-text-field
      v-model="zipCode"
      label="Zip Code"
      type="text"
    ></v-text-field>
      <v-btn type="submit" block class="mt-2 signup-button">Submit</v-btn>
    </v-form>
  </v-sheet>
</template>
<script>
// export default {
//   setup() {
//     const firstName = ref('');
//     const lastName = ref('');
//     const email = ref('');
//     const password = ref('');
//     const zipCode = ref('');

//     return {
//       firstName,lastName,email,password,zipCode
//     };
//   },
// };
</script>
<style scoped>
.signup-button {
  background-color: #be2020;
  height: 45px!important;
  color: rgb(245, 243, 243);
  font-weight: bold;
  font-size: 16px;
}
</style>
