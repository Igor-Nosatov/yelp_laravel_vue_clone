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
            Email / Notifications
          </h4>
          <p class="pt-2 pb-2">
            Add accounts, remove accounts, and change your primary account.
          </p>
          <v-divider></v-divider>
          <p class="pt-4 pb-4">
            test123@gmail.com<v-icon>mdi-circle-small</v-icon
            ><a href="" class="text-decoration-none">Resend Confirmation</a>
          </p>
          <v-divider></v-divider>
          <h4 class="font-weigth-bold account-title text-h4 pt-2 pb-2">
            Phone Number
          </h4>
          <p class="pt-4 pb-4">
            Add or edit your phone number. We’ll automatically enter it when you
            request a quote, make restaurant reservations, order food delivery,
            or make other transactions on Yelp.
          </p>
          <v-divider></v-divider>
          <v-row>
            <v-col cols="6">
              <v-form
                validate-on="submit lazy"
                @submit.prevent="submit"
                class="pt-10 pb-10"
              >
                <v-text-field label="Phone Number"></v-text-field>
                <v-btn
                  :loading="loading"
                  type="submit"
                  block
                  class="mt-2 pt-5 pb-5"
                  color="red-accent-4"
                  text="Save Phone Number"
                ></v-btn>
              </v-form>
            </v-col>
          </v-row>

          <h4 class="font-weigth-bold account-title text-h4 pt-2 pb-2">
            Email Notification Settings
          </h4>
          <p class="pt-4 pb-4">
            Manage what emails regarding this account are sent to
            sinevor13@gmail.com. These preferences apply to this Yelp account
            only.
          </p>
          <v-divider></v-divider>
          <v-checkbox
            label="Receive emails from Yelp"
            class="checkbox-notifications"
          ></v-checkbox>
          <v-row>
            <v-col cols="8">
              <v-row>
                <v-col cols="6">
                  <p class="font-weight-bold pl-3 pt-3">
                    Get email updates <br />
                    about:
                  </p>
                </v-col>
                <v-col cols="6">
                  <v-checkbox
                    label="Friend requests"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="New followers"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Compliments and direct message"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Content your friends share with you"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Messages from business owners"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Status of your business info edits"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Contributions"
                    class="checkbox-notifications"
                  ></v-checkbox>
                </v-col>
              </v-row>
            </v-col>
          </v-row>

          <v-row>
            <v-col cols="8">
              <v-row>
                <v-col cols="6">
                  <p class="font-weight-bold pl-3 pt-3">
                    We'll also let you <br />
                    know about:
                  </p>
                </v-col>
                <v-col cols="6">
                  <v-checkbox
                    label="Businesses you might like"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Yelp tips and tricks"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Suggested businesses to review"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Discounts and promotions"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Curated updates from places near you"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="The Local Yelp for your areas (edit)"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Restaurant News"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="New questions you can answer"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Surveys"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Neighborhoods"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Feedback on businesses you've contacted"
                    class="checkbox-notifications"
                  ></v-checkbox>
                </v-col>
              </v-row>
            </v-col>
          </v-row>

          <h4 class="font-weigth-bold account-title text-h4 pt-16 pb-2">
            Push Notification Settings
          </h4>
          <p class="pt-4 pb-4">
            Receive push notifications to mobile devices that are connected to
            your Yelp account
          </p>
          <v-divider></v-divider>
          <v-row class="pt-5">
            <v-col cols="8">
              <v-row>
                <v-col cols="6">
                  <p class="font-weight-bold pl-3 pt-3">
                    Reactions to your <br />
                    posts:
                  </p>
                </v-col>
                <v-col cols="6">
                  <v-checkbox
                    label="Review Comments"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Helpful answers"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Direct messages"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Compliments"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Photo and video likes"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Tip likes"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Check-in likes"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Check-in comments"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Review votes"
                    class="checkbox-notifications"
                  ></v-checkbox>
                </v-col>
              </v-row>
            </v-col>
          </v-row>
          <v-row class="pt-5">
            <v-col cols="8">
              <v-row>
                <v-col cols="6">
                  <p class="font-weight-bold pl-3 pt-3">From Yelp:</p>
                </v-col>
                <v-col cols="6">
                  <v-checkbox
                    label="Waitlist updates"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Order and purchase updates"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Neighborhoods"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Businesses You Hired"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Collections updates"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Surveys"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Updates on your views"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Suggested businesses to review"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Businesses you might like"
                    class="checkbox-notifications"
                  ></v-checkbox>
                  <v-checkbox
                    label="Deals and announcements"
                    class="checkbox-notifications"
                  ></v-checkbox>
                </v-col>
              </v-row>
            </v-col>
          </v-row>

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

.checkbox-notifications {
  height: 50px !important;
}
</style>
