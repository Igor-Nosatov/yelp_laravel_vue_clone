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
            Privacy Settings
          </h4>
          <p class="pt-3 pb-3">Manage the visibility of your profile.</p>
          <v-divider></v-divider>
          <div class="visibility-options">
            <div class="pt-8 pl-3 font-weight-black">Find Friends</div>
            <v-checkbox
              label="Let others find my profile using my name or email address."
              class="pb-5 checkbox-settings"
            ></v-checkbox>
            <p class="pt-8 pl-3 font-weight-black">Bookmarks</p>
            <v-checkbox
              label="Make my bookmarks public"
              class="pb-5 checkbox-settings"
            ></v-checkbox>
            <p class="pt-8 pl-3 font-weight-black">
              Direct Messages from Businesses
            </p>
            <v-checkbox
              label="Allow business owners to send you direct messages in response to your review."
              class="pb-5 checkbox-settings"
            ></v-checkbox>
            <p class="pt-8 pl-3 font-weight-black">Ads displayed off Yelp</p>
            <v-checkbox
              label="Allow Yelp to target ads on other sites and apps."
              class="pb-5 checkbox-settings"
            ></v-checkbox>
          </div>
          <h4 class="font-weigth-bold account-title text-h4 pt-12 pb-2">
            Business Visibility Settings
          </h4>
          <p class="pt-3 pb-3">
            Manage what a business sees when you interact with its Yelp listing.
          </p>
          <v-divider></v-divider>
          <p class="pt-3 pb-3">
            These settings govern how businesses will see actions you take
            through Yelp, such as, mobile calls, directions requests, map views,
            and visits to a business’s website. The date, time, and whether
            you’re accessing Yelp via web or mobile device are always shown.
          </p>
          <p class="pt-3 pb-3">
            Businesses can always see your public contributions (like reviews
            and photos), and information about your transactions with them
            through Yelp.
          </p>

          <v-table class="pt-7">
            <thead>
              <tr>
                <th class="text-left">What businesses can see about me</th>
                <th class="text-left">Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <v-radio label="My name and Yelp profile" value="1"></v-radio>
                </td>
                <td>
                  <p>
                    Jimmy J., a man in his 20s got directions to your business.
                    Today, June 3, 2023, 2:50 am via Yelp website
                  </p>
                </td>
              </tr>
              <tr>
                <td><v-radio label="My demographics" value="2"></v-radio></td>
                <td>
                  <p>
                    Jimmy J., a man in his 20s got directions to your business.
                    Today, June 3, 2023, 2:50 am via Yelp website
                  </p>
                </td>
              </tr>
              <tr>
                <td><v-radio label="Basic information" value="3"></v-radio></td>
                <td>
                  <p>
                    Jimmy J., a man in his 20s got directions to your business.
                    Today, June 3, 2023, 2:50 am via Yelp website
                  </p>
                </td>
              </tr>
            </tbody>
          </v-table>

          <v-row class="pt-5 pb-5">
            <v-col cols="12">
              <div class="d-flex flex-row">
                <v-btn class="profile-btn mr-2" color="red-accent-4"
                  >Save Changes</v-btn
                >
                <v-btn>Cancel</v-btn>
              </div>
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
.checkbox-settings {
  height: 30px !important;
}
</style>
