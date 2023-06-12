<template>
    <v-row  justify="center">
      <v-col cols="7">
        <v-row>
            <v-col cols="3">
                <h6 class="font-weight-black text-h6 pt-4">Jimmy J.’s Account</h6>
                <h6 class="font-weight-black text-h6">Settings</h6>
                <v-list lines="one">
                  <v-divider></v-divider>
                  <v-list-item>Profile</v-list-item>
                  <v-divider></v-divider>
                  <v-list-item>Password</v-list-item>
                  <v-divider></v-divider>
                  <v-list-item>Email / Notifications</v-list-item>
                  <v-divider></v-divider>
                  <v-list-item>Locations</v-list-item>
                  <v-divider></v-divider>
                  <v-list-item>Privacy Settings</v-list-item>
                  <v-divider></v-divider>
                  <v-list-item>External Applications</v-list-item>
                  <v-divider></v-divider>
                </v-list>
              </v-col>
          <v-col cols="9">
              <h4 class="font-weigth-bold account-title text-h4 pt-2 pb-2">Facebook</h4>
              <p class=" pt-2 pb-2">Share your reviews on Facebook</p>
              <v-divider></v-divider>
              <p class=" pt-2 pb-2">When you write new reviews, automatically have Yelp post an excerpt of your reviews to Facebook.</p>
              <p class=" pt-2 pb-2">You will always have an option not to post a review to Facebook</p>
              <v-btn   color="indigo-darken-3" class=" pt-2 pb-2"> <v-icon size="large" class="pr-2">mdi-facebook</v-icon> Connect to facebook</v-btn>
              <h4 class="font-weigth-bold account-title text-h4 pt-5 pb-2">Twitter</h4>
              <p class=" pt-2 pb-2">Tweet your reviews on Twitter</p>
              <v-divider></v-divider>
              <p class=" pt-2 pb-2">When you write new reviews, automatically have Yelp post a link to Twitter and spread the word!</p>
              <p class=" pt-2 pb-2">You will always have an option not to post a review to Twitter</p>
              <v-btn   color="blue-lighten-1" class=" pt-2 pb-2"> <v-icon size="large" class="pr-2">mdi-twitter </v-icon> Connect to Twitter</v-btn>
              <h4 class="font-weigth-bold account-title text-h4 pt-5  pb-2">Google</h4>
              <p class=" pt-2 pb-2">You will always have an option to sign in with google account</p>
              <v-divider></v-divider>
              <v-btn color="green-accent-3" class=" pt-2 pb-2 mt-4"> <v-icon size="large" class="pr-2">mdi-google </v-icon>Connect to Google</v-btn>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </template>
  <script>
  </script>
  <style scoped>
  .account-title{
      color:#dd2020
  }
  </style>
