<template>
    <v-row justify="center">
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
            <h4 class="font-weigth-bold account-title text-h4 pt-2 pb-2">
                Change your password
            </h4>
            <v-divider></v-divider>
            <v-row justify="start">
              <v-col cols="8">
                <v-form v-model="valid">
                  <v-row class="pt-8">
                    <v-col cols="12" class="pt-2 pb-2">
                      <v-text-field label="Current password" type="text"></v-text-field>
                    </v-col>
                    <v-col cols="12" class="pt-2 pb-2">
                      <v-text-field label="New password" type="text"></v-text-field>
                    </v-col>
                    <v-col cols="12" class="pt-2 pb-2">
                      <v-text-field label="Verify new password" type="text"></v-text-field>
                    </v-col>
                     <v-col cols="12">
                      <div class="d-flex flex-row">
                          <v-btn class="profile-btn mr-2">Save Changes</v-btn>
                          <v-btn>Cancel</v-btn>
                      </div>
                     </v-col>
                  </v-row>
                </v-form>
              </v-col>
            </v-row>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </template>
  <script>
  </script>
  <style scoped>
  .account-title {
    color: #dd2020;
  }
  .profile-btn{
      background-color: #dd2020;
      color:#fff;
      font-weight: bold;
  }
  .account-details {
    font-size: 60px;
  }
  </style>
