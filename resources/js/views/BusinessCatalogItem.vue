<template>
  <v-row>
    <v-col cols="12" class="title-block">
      <v-row justify="center">
        <v-col cols="6">
          <h2 class="text-h2 text-left">Columbus Burgers</h2>
          <div class="d-flex flex-row justify-left">
            <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
            <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
            <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
            <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
            <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
            <span class="text-reviews"> 4.4 (36 reviews)</span>
          </div>
          <p>
            <span class="claimed-title">
              <v-icon>mdi-check</v-icon>Claimed</span
            >
            <span class="price-range-title"
              >&nbsp;* &nbsp; $$ &nbsp; * &nbsp;</span
            >
            <span>
              &nbsp;<a href="" class="category-title-link">Food Trucks,</a
              >&nbsp; &nbsp;
              <a href="" class="category-title-link">Food Court</a>&nbsp;</span
            >
            <v-btn class="btn-top-catalog-item ml-4">Edit</v-btn>
          </p>
          <p>
            <span class="close-title">Closed</span>
            <v-btn class="btn-top-catalog-item1 ml-4">See hours</v-btn>
          </p>
        </v-col>
      </v-row>
    </v-col>
  </v-row>
  <v-row justify="center">
    <v-col cols="5">
      <v-row class="pb-8">
        <v-col col="12">
          <v-breadcrumbs
            :items="[' FoodFood', 'TrucksOff', 'Fort Mason Center']"
          ></v-breadcrumbs>
        </v-col>
        <v-col col="8">
          <div class="d-flex flex-row">
            <v-btn class="ml-1 mr-1"> <v-icon>mdi-star</v-icon>Write a review</v-btn>
            <v-btn class="ml-1 mr-1"> <v-icon>mdi-camera</v-icon>Add photo</v-btn>
            <v-btn class="ml-1 mr-1"> <v-icon>mdi-share-circle</v-icon>Share</v-btn>
            <v-btn class="ml-1 mr-1"> <v-icon>mdi-cloud-plus-outline</v-icon>Save</v-btn>
          </div>
        </v-col>
      </v-row>
      <v-divider></v-divider>

      <v-row class="pagination_block pt-5">
        <v-col cols="6">
          <v-pagination v-model="page" :length="4" rounded="0"></v-pagination>
        </v-col>
        <v-col cols="6" class="pt-8">
          <p class="text-right">1 of 24</p>
        </v-col>
      </v-row>
    </v-col>
    <v-col cols="3">
      <v-card class="pt-6 pb-4 line-up mt-12">
        <h4 class="text-center pb-4">
          <v-icon>mdi-button-pointer</v-icon> See this Friday's Food Lineup!
        </h4>
        <div class="pl-8 pr-8 mb-4">
          <v-btn class="btn-info pb-2 pt-2"> Learn more</v-btn>
        </div>
      </v-card>
      <v-card class="pt-6 pb-4 line-up pr-2 pl-4 mt-10">
        <v-row justify="space-between">
          <v-col cols="6"> <a href="">https://offthegrid.com</a> </v-col>
          <v-col cols="2">
            <v-icon>mdi-arrow-top-right-bold-box-outline</v-icon>
          </v-col>
        </v-row>
        <br />
        <v-divider></v-divider>
        <br />
        <v-row justify="space-between">
          <v-col cols="6"><h4>(415) 339-5888</h4> </v-col>
          <v-col cols="2">
            <v-icon>mdi-phone-in-talk</v-icon>
          </v-col>
        </v-row>
        <br />
        <v-divider></v-divider>
        <br />
        <v-row justify="space-between">
          <v-col cols="10">
            <h4>Get Directions</h4>
            <p>2 Marina Blvd Fort Mason Center</p>
            <p>Parking Lot San Francisco, CA 94123</p>
          </v-col>
          <v-col cols="2" class="pt-8">
            <v-icon>mdi-arrow-right-bold-circle</v-icon>
          </v-col>
        </v-row>
        <br />
        <v-divider></v-divider>
        <br />
        <v-row justify="space-between">
          <v-col cols="6">
            <a href="">Message the business</a>
          </v-col>
          <v-col cols="2">
            <v-icon>mdi-message-text-outline</v-icon>
          </v-col>
        </v-row>
      </v-card>
    </v-col>
  </v-row>
  <v-row justify="center">
    <v-col cols="8">
      <v-divider></v-divider>
      <v-row class="pt-8 pb-16">
        <v-col cols="12">
          <h2>Collections Including Off the Grid: Fort Mason Center</h2>
        </v-col>
        <v-col cols="3">
          <v-card height="500" class="rounded-0">
            <img
              src="./../images/top.jpg"
              alt=""
              width="300"
              height="300"
              class="rounded-0"
            />
            <v-card-title>Burger King</v-card-title>
            <v-card-text>
              95 reviews <br />
              Burgers, Fast Food, American (New)
            </v-card-text>
            <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
            <v-card-text class="text-center">
              <a href=""> Open </a> until 10:00 PM
            </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card height="500" class="rounded-0">
            <img
              src="./../images/top.jpg"
              alt=""
              width="300"
              height="300"
              class="rounded-0"
            />
            <v-card-title>Burger King</v-card-title>
            <v-card-text>
              95 reviews <br />
              Burgers, Fast Food, American (New)
            </v-card-text>
            <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
            <v-card-text class="text-center">
              <a href=""> Open </a> until 10:00 PM
            </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card height="500" class="rounded-0">
            <img
              src="./../images/top.jpg"
              alt=""
              width="300"
              height="300"
              class="rounded-0"
            />
            <v-card-title>Burger King</v-card-title>
            <v-card-text>
              95 reviews <br />
              Burgers, Fast Food, American (New)
            </v-card-text>
            <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
            <v-card-text class="text-center">
              <a href=""> Open </a> until 10:00 PM
            </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card height="500" class="rounded-0">
            <img
              src="./../images/top.jpg"
              alt=""
              width="300"
              height="300"
              class="rounded-0"
            />
            <v-card-title>Burger King</v-card-title>
            <v-card-text>
              95 reviews <br />
              Burgers, Fast Food, American (New)
            </v-card-text>
            <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
            <v-card-text class="text-center">
              <a href=""> Open </a> until 10:00 PM
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>

      <v-row class="pt-8 pb-16">
        <v-divider></v-divider>
        <v-col cols="12" class="pt-8">
          <h2>People Also Viewed</h2>
        </v-col>
        <v-col cols="3">
          <v-card height="500" class="rounded-0">
            <img
              src="./../images/top.jpg"
              alt=""
              width="300"
              height="300"
              class="rounded-0"
            />
            <v-card-title>Burger King</v-card-title>
            <v-card-text>
              95 reviews <br />
              Burgers, Fast Food, American (New)
            </v-card-text>
            <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
            <v-card-text class="text-center">
              <a href=""> Open </a> until 10:00 PM
            </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card height="500" class="rounded-0">
            <img
              src="./../images/top.jpg"
              alt=""
              width="300"
              height="300"
              class="rounded-0"
            />
            <v-card-title>Burger King</v-card-title>
            <v-card-text>
              95 reviews <br />
              Burgers, Fast Food, American (New)
            </v-card-text>
            <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
            <v-card-text class="text-center">
              <a href=""> Open </a> until 10:00 PM
            </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card height="500" class="rounded-0">
            <img
              src="./../images/top.jpg"
              alt=""
              width="300"
              height="300"
              class="rounded-0"
            />
            <v-card-title>Burger King</v-card-title>
            <v-card-text>
              95 reviews <br />
              Burgers, Fast Food, American (New)
            </v-card-text>
            <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
            <v-card-text class="text-center">
              <a href=""> Open </a> until 10:00 PM
            </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card height="500" class="rounded-0">
            <img
              src="./../images/top.jpg"
              alt=""
              width="300"
              height="300"
              class="rounded-0"
            />
            <v-card-title>Burger King</v-card-title>
            <v-card-text>
              95 reviews <br />
              Burgers, Fast Food, American (New)
            </v-card-text>
            <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
            <v-card-text class="text-center">
              <a href=""> Open </a> until 10:00 PM
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
      <v-divider></v-divider>
      <v-row>
        <v-col class="pt-8">
          <h2 class="font-weight-bold pt-5 pb-4">
            Frequently Asked Questions about Off the Grid: Fort Mason Center
          </h2>
          <h3 class="font-weight-bold pb-4">
            Does Off the Grid: Fort Mason Center have outdoor seating?
          </h3>
          <p>Yes, Off the Grid: Fort Mason Center has outdoor seating.</p>
          <h3 class="font-weight-bold pt-5 pb-4">
            Is Off the Grid: Fort Mason Center currently offering delivery or
            takeout?
          </h3>
          <p>Yes, Off the Grid: Fort Mason Center offers takeout.</p>
          <h3 class="font-weight-bold pt-5 pb-4">
            What forms of payment are accepted?
          </h3>
          <p>Off the Grid: Fort Mason Center accepts credit cards.</p>
          <h3 class="font-weight-bold pt-5 pb-4">
            How is Off the Grid: Fort Mason Center rated?
          </h3>
          <p>Off the Grid: Fort Mason Center has 4 stars.</p>
        </v-col>
      </v-row>
    </v-col>
  </v-row>
</template>

<script>
</script>
<style scoped>
.title-block {
  background-image: url("../images/bg.jpg");
  height: 500px;
  background-size: cover !important;
  background-repeat: no-repeat, no-repeat;
}
.feedback-icon {
  color: #fa891e;
  font-size: 60px;
}
.text-h2 {
  padding-top: 160px;
}
.text-reviews {
  padding-top: 28px;
}
.text-h2,
.text-reviews {
  color: #fff;
  font-weight: bold;
}
.claimed-title,
.price-range-title {
  color: #fff;
  font-weight: bold;
  font-size: 19px;
}
.category-title-link {
  color: #fff;
  font-weight: bold;
  font-size: 19px;
  text-decoration: none;
}
.btn-top-catalog-item,
.btn-top-catalog-item1 {
  color: #fff;
  font-weight: bold;
  font-size: 14px;
  background-color: rgba(28, 28, 28, 0);
  border: 1px solid rgb(196, 190, 190);
}

.close-title {
  color: #f38a6b;
  font-weight: bold;
  font-size: 19px;
}

.btn-info {
  background-color: #e21b1b;
  width: 100%;
  padding: 10px;
  color: #fff;
  font-weight: bold;
}
.line-up {
  border: 1px solid #e9e5e5;
}
</style>
