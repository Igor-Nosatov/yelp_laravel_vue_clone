<template>
  <v-row justify="center">
    <v-col cols="6">
      <h5 class="tex-left text-h5 title-business pt-5 font-weight-bold pb-5">
        Add Business
      </h5>
      <p class="pb-6">
        Any suggested changes to a business page must first be verified by
        Yelp’s moderators.
      </p>
      <v-form v-model="valid">
        <v-row>
          <v-col cols="12">
            <v-text-field
              label="Business Name"
              variant="outlined"
            ></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-text-field label="Address 1" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-text-field label="Address 2" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-text-field label="City" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-select
              label="Select City"
              :items="[
                'California',
                'Colorado',
                'Florida',
                'Georgia',
                'Texas',
                'Wyoming',
              ]"
              variant="outlined"
            ></v-select>
          </v-col>
          <v-col cols="12">
            <v-select
              label="Select State"
              :items="[
                'California',
                'Colorado',
                'Florida',
                'Georgia',
                'Texas',
                'Wyoming',
              ]"
              variant="outlined"
            ></v-select>
          </v-col>
          <v-col cols="12">
            <v-text-field label="Zip" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-text-field label="Phone" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-text-field label="Web Address" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-select
              label="Add Category"
              :items="[
                'California',
                'Colorado',
                'Florida',
                'Georgia',
                'Texas',
                'Wyoming',
              ]"
              variant="outlined"
            ></v-select>
          </v-col>
          <v-col cols="12">
            <h3 class="font-weight-bold">Hours</h3>
            <v-row class="pt-2">
              <v-col cols="2" class="pt-5"> Mon </v-col>
              <v-col cols="3" class="pt-5"> 10:00 AM - 12:00 AM </v-col>
              <v-col cols="2">
                <v-btn color="red-darken-1">Remove</v-btn></v-col
              >
            </v-row>
            <v-row>
              <v-col cols="2" class="pt-5"> Tue </v-col>
              <v-col cols="3" class="pt-5"> 10:00 AM - 12:00 AM </v-col>
              <v-col cols="2">
                <v-btn color="red-darken-1">Remove</v-btn></v-col
              >
            </v-row>
            <v-row>
              <v-col cols="2" class="pt-5"> Wed </v-col>
              <v-col cols="3" class="pt-5"> 10:00 AM - 12:00 AM </v-col>
              <v-col cols="2">
                <v-btn color="red-darken-1">Remove</v-btn></v-col
              >
            </v-row>
            <v-row>
              <v-col cols="2" class="pt-5"> Thu </v-col>
              <v-col cols="3" class="pt-5"> 10:00 AM - 12:00 AM </v-col>
              <v-col cols="2">
                <v-btn color="red-darken-1">Remove</v-btn></v-col
              >
            </v-row>
            <v-row>
              <v-col cols="2" class="pt-5"> Fri </v-col>
              <v-col cols="3" class="pt-5"> 10:00 AM - 12:00 AM </v-col>
              <v-col cols="2">
                <v-btn color="red-darken-1">Remove</v-btn></v-col
              >
            </v-row>
            <v-row>
              <v-col cols="2" class="pt-5"> Sat </v-col>
              <v-col cols="3" class="pt-5"> 10:00 AM - 12:00 AM </v-col>
              <v-col cols="2">
                <v-btn color="red-darken-1">Remove</v-btn></v-col
              >
            </v-row>
            <v-row>
              <v-col cols="2" class="pt-5"> Sun </v-col>
              <v-col cols="3" class="pt-5"> 10:00 AM - 12:00 AM </v-col>
              <v-col cols="2">
                <v-btn color="red-darken-1">Remove</v-btn></v-col
              >
            </v-row>
            <div class="d-flex flex-row pt-6">
              <v-select
                label="Select Day"
                :items="['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']"
                variant="outlined"
                class="pl-2 pr-2"
              ></v-select>
              <v-select
                label="Opened"
                :items="[
                  '9:00 am',
                  '8:00 am',
                  '7:00 am',
                  '6:00 am',
                  '5:00 am',
                  '4:00 am',
                ]"
                variant="outlined"
                class="pl-2 pr-2"
              ></v-select>
              <v-select
                label="Closed"
                :items="[
                  '4:00 pm',
                  '5:00 pm',
                  '6:00 pm',
                  '7:00 pm',
                  '8:00 pm',
                  '9:00 pm',
                ]"
                variant="outlined"
                class="pl-2 pr-2"
              ></v-select>
              <v-btn class="pl-2 pr-2 btn-create">Add Hours</v-btn>
            </div>
          </v-col>
          <v-col cols="12">
            <v-checkbox label="Business Closed or Moved"></v-checkbox>
            <v-checkbox
              label="Business is inside a Mall or Airport"
            ></v-checkbox>
            <v-checkbox
              label="This is a duplicate of another business on Yelp"
            ></v-checkbox>
          </v-col>
          <v-col cols="12">
            <p class="font-weight-bold">
              Please provide additional context to help us verify this change:
              Optional
            </p>
            <v-textarea variant="outlined"></v-textarea>
          </v-col>
          <v-col cols="12" class="pb-12">
            <div class="d-flex flex-row">
              <v-btn class="profile-btn mr-2" color="red-darken-1">Save</v-btn>
              <v-btn>Cancel</v-btn>
            </div>
          </v-col>
        </v-row>
      </v-form>
    </v-col>
  </v-row>
</template>
<script>
</script>
<style scoped>
.title-business {
  color: #e22323;
}
.btn-create {
  height: 55px;
}
</style>
