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
            Profile
          </h4>
          <v-divider></v-divider>
          <v-row justify="start">
            <v-col cols="10">
              <v-form v-model="valid">
                <v-row>
                  <v-col cols="6" class="pt-2 pb-2">
                    <h4 class="ml-3 pt-12">
                      Your Profile Photo
                      <a href="" class="text-decoration-none">(Add/Edit)</a>
                    </h4>
                    <v-icon
                      icon="mdi-account-box-outline"
                      class="account-details pl-2"
                    ></v-icon>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2 mt-16">
                    <v-text-field label="First Name" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="Last Name" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="Nickname" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6">
                    <h4 class="font-weight-boldpt-2 pb-2">Gender</h4>
                    <v-radio-group>
                      <v-radio label="Female" value="1"></v-radio>
                      <v-radio label="Male" value="2"></v-radio>
                      <v-radio label="Other" value="3"></v-radio>
                    </v-radio-group>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-textarea label="I Love..."></v-textarea>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field
                      label="Your headline"
                      type="text"
                    ></v-text-field>
                  </v-col>

                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="Find Me In" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="My Hometown" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="My Blog Or Website" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="When I’m Not Yelping..." type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="Why You Should Read My Reviews" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="My Second Favorite Website" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="The Last Great Book I Read" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="My First Concert" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="My Favorite Movie" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="My Last Meal On Earth" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="Don’t Tell Anyone Else But..." type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="Most Recent Discovery" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="6" class="pt-2 pb-2">
                    <v-text-field label="Current Crush" type="text"></v-text-field>
                  </v-col>
                  <v-col cols="12" class="pt-2 pb-2">
                    <v-select
                    label="Select Language"
                    :items="['English', 'German', 'French', 'Poland']"
                  ></v-select>
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
