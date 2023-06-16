<template>
  <v-row>
    <v-col cols="12" class="title-block">
      <v-row justify="center">
        <v-col cols="6">
          <h2 class="text-h2 text-left">Columbus Burgers</h2>
          <div class="d-flex flex-row justify-left">
            <v-icon size="small" class="feedback-icon">mdi-star-box</v-icon>
            <v-icon size="small" class="feedback-icon">mdi-star-box</v-icon>
            <v-icon size="small" class="feedback-icon">mdi-star-box</v-icon>
            <v-icon size="small" class="feedback-icon">mdi-star-box</v-icon>
            <v-icon size="small" class="feedback-icon">mdi-star-box</v-icon>
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
            <v-btn class="ml-1 mr-1">
              <v-icon>mdi-star</v-icon>Write a review</v-btn
            >
            <v-btn class="ml-1 mr-1">
              <v-icon>mdi-camera</v-icon>Add photo</v-btn
            >
            <v-btn class="ml-1 mr-1">
              <v-icon>mdi-share-circle</v-icon>Share</v-btn
            >
            <v-btn class="ml-1 mr-1">
              <v-icon>mdi-cloud-plus-outline</v-icon>Save</v-btn
            >
          </div>
        </v-col>
      </v-row>
      <v-row class="pt-5 pb-5">
        <v-col cols="12">
          <h6 class="text-h6 font-weight-bold pb-4">Menu</h6>
          <p class="font-weight-bold pb-4">Popular dishes</p>
          <v-row class="pb-8 pt-2">
            <v-col cols="3">
              <v-card class="menu-card rounded-0">
                <img
                  src="./../images/47456.jpg"
                  alt=""
                  height="150"
                  class="menu-card-img"
                />
                <v-card-title class="text-subtitle-1">
                  Queso De Mayo
                </v-card-title>
                <v-card-subtitle>
                  <a href="" class="text-decoration-none pr-2">7 photos </a>
                  <a href="" class="text-decoration-none pr-2">7 Reviews</a>
                </v-card-subtitle>
              </v-card>
            </v-col>
            <v-col cols="3">
              <v-card class="menu-card rounded-0">
                <img
                  src="./../images/47456.jpg"
                  alt=""
                  height="150"
                  class="menu-card-img"
                />
                <v-card-title class="text-subtitle-1">
                  Queso De Mayo
                </v-card-title>
                <v-card-subtitle>
                  <a href="" class="text-decoration-none pr-2">7 photos </a>
                  <a href="" class="text-decoration-none pr-2">7 Reviews</a>
                </v-card-subtitle>
              </v-card>
            </v-col>
            <v-col cols="3">
              <v-card class="menu-card rounded-0">
                <img
                  src="./../images/47456.jpg"
                  alt=""
                  height="150"
                  class="menu-card-img"
                />
                <v-card-title class="text-subtitle-1">
                  Queso De Mayo
                </v-card-title>
                <v-card-subtitle>
                  <a href="" class="text-decoration-none pr-2">7 photos </a>
                  <a href="" class="text-decoration-none pr-2">7 Reviews</a>
                </v-card-subtitle>
              </v-card>
            </v-col>
            <v-col cols="3">
              <v-card class="menu-card rounded-0">
                <img
                  src="./../images/47456.jpg"
                  alt=""
                  height="150"
                  class="menu-card-img"
                />
                <v-card-title class="text-subtitle-1">
                  Queso De Mayo
                </v-card-title>
                <v-card-subtitle>
                  <a href="" class="text-decoration-none pr-2">7 photos </a>
                  <a href="" class="text-decoration-none pr-2">7 Reviews</a>
                </v-card-subtitle>
              </v-card>
            </v-col>
          </v-row>
          <div class="d-flex flex-row justify-start">
            <v-btn class="text-capitalize"
              ><v-icon>mdi-link-box-variant-outline</v-icon>Website Menu</v-btn
            >
            <v-btn class="text-capitalize ml-3"
              ><v-icon>mdi-silverware</v-icon>Full menu</v-btn
            >
          </div>
        </v-col>
      </v-row>
      <v-divider></v-divider>
      <v-row class="pt-5 pb-5">
        <v-col cols="12">
          <h6 class="text-h6 font-weight-bold">Location & Hours</h6>
          <v-row class="pt-4 pb-7">
            <v-col cols="6">
              <img
                src="../images/mini-map.png"
                alt=""
                height="170"
                class="img-map-locations"
              />
              <div class="d-flex flex-row justify-space-between">
                <div class="mt-3">
                  <a href="" class="text-decoration-none pt-2">455 Market St</a>
                  <p class="font-weight-bold pt-2">
                    Market & 1st San Francisco, CA 94105
                  </p>
                  <p class="pt-2">
                    Front St & Fremont St Financial District, SoMa
                  </p>
                </div>
                <div class="mt-3">
                  <v-btn class="text-capitalize text-subtitle-1 mr-3 pt-3 pb-8"
                    >Get directions</v-btn
                  >
                </div>
              </div>
            </v-col>
            <v-col cols="6">
              <v-row class="pt-2">
                <v-col cols="2" class="pr-2"> Mon </v-col>
                <v-col cols="10"> 10:00 AM - 12:00 AM (Next day) </v-col>
              </v-row>
              <v-row>
                <v-col cols="2" class="pr-2"> Tue </v-col>
                <v-col cols="10"> 10:00 AM - 12:00 AM (Next day) </v-col>
              </v-row>
              <v-row>
                <v-col cols="2" class="pr-2"> Wed </v-col>
                <v-col cols="10"> 10:00 AM - 12:00 AM (Next day) </v-col>
              </v-row>
              <v-row>
                <v-col cols="2" class="pr-2"> Thu </v-col>
                <v-col cols="10"> 10:00 AM - 12:00 AM (Next day) </v-col>
              </v-row>
              <v-row>
                <v-col cols="2" class="pr-2"> Fri </v-col>
                <v-col cols="10"> 10:00 AM - 12:00 AM (Next day) </v-col>
              </v-row>
              <v-row>
                <v-col cols="2" class="pr-2"> Sat </v-col>
                <v-col cols="10"> 10:00 AM - 12:00 AM (Next day) </v-col>
              </v-row>

              <v-row>
                <v-col cols="2" class="pr-2"> Sun </v-col>
                <v-col cols="10"> 10:00 AM - 12:00 AM (Next day) </v-col>
              </v-row>
              <v-btn class="pt-3 pb-8 mt-3">
                <v-icon>mdi-lead-pencil</v-icon>
                Edit business info
              </v-btn>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
      <v-divider></v-divider>
      <v-row class="pt-5 pb-5">
        <v-col cols="12">
          <h6 class="text-h6 font-weight-bold">Amenities and More</h6>

          <v-row class="pt-4 pb-4">
            <v-col cols="6"
              ><v-icon class="pr-3">mdi-bottle-tonic-plus-outline</v-icon>Health
              ScorePASS Powered by Hazel Analytics</v-col
            >
            <v-col cols="6"
              ><v-icon class="pr-3">mdi-motorbike</v-icon>Offers Delivery</v-col
            >
            <v-col cols="6"
              ><v-icon class="pr-3">mdi-food-apple</v-icon>Vegan Options</v-col
            >
            <v-col cols="6"
              ><v-icon class="pr-3">mdi-food-turkey</v-icon>Casual,
              Trendy</v-col
            >
            <v-col cols="6"
              ><v-icon class="pr-3">mdi-teddy-bear</v-icon>Good For Kids</v-col
            >
            <v-col cols="6"
              ><v-icon class="pr-3">mdi-wifi-arrow-up-down</v-icon>Free
              Wi-Fi</v-col
            >
            <v-col cols="6"
              ><v-icon class="pr-3">mdi-car-brake-parking</v-icon>Street
              Parking</v-col
            >
            <v-col cols="6"
              ><v-icon class="pr-3">mdi-sofa-single-outline</v-icon>Outdoor
              Seating</v-col
            >
          </v-row>
        </v-col>
      </v-row>
      <v-divider></v-divider>
      <v-row class="pt-5 pb-5">
        <v-col cols="12">
          <h6 class="text-h6 font-weight-bold">About the Business</h6>
          <p class="pb-5 pt-5">
            Melty comfort food fast. Enjoy handcrafted, angus-wagyu blend
            MeltBurgers, great takes on grilled cheese, melty mac 'n' cheese,
            handspun milkshakes, crispy fries and much more. We aim to deliver
            an "I Love It Here Experience" to every guest. Order from our
            friendly team members, in-store self…
          </p>
          <v-btn class="pt-3 pb-7"> Read more </v-btn>
        </v-col>
      </v-row>
      <v-divider></v-divider>
      <v-row class="pt-5 pb-5">
        <v-col cols="12">
          <div class="d-flex flex-row justify-space-between">
            <h6 class="text-h6 font-weight-bold">Ask the Community</h6>
            <p>
              <a href="" class="text-decoration-none">Ask a question</a>
              <v-icon size="x-large">mdi-plus</v-icon>
            </p>
          </div>
          <v-row class="pt-4">
            <v-col cols="1">
              <p class="font-weight-bold">Q:</p>
            </v-col>
            <v-col cols="11">
              <p>
                Oh no. Did you guys take yourselves off of Grubhub?
              </p>
            </v-col>
          </v-row>
          <v-row class="pb-5">
            <v-col cols="1">
              <p class="font-weight-bold">A:</p>
            </v-col>
            <v-col cols="11">
                <v-row>
                    <v-col cols="12">
                        <p>
                            Hi! No we did not. But when it gets a little too busy for us, we
                            do pause from taking orders from our online ordering platforms
                            to give our selves a chance to catch up for those that are in
                            line at the shop. Thanks for your inquiry and we hope to…
                            <a href="" class="text-decoration-none">more </a>
                          </p>
                    </v-col>
                    <v-col cols="12">
                        <span class="pr-2">John E., Business Manager</span>
                        <v-icon class="pr-3">mdi-circle-small</v-icon>
                        <span class="pr-2">3 years ago</span>
                        <v-icon class="pr-3">mdi-circle-small</v-icon>
                        <span class="pr-2">3 people found this helpful</span>
                    </v-col>
                    <v-col cols="12">
                        <v-btn>See question details</v-btn>
                    </v-col>
                </v-row>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
      <v-divider></v-divider>
      <v-row class="pt-5 pb-5">
        <v-col cols="12">
          <h6 class="text-h6 font-weight-bold">Recommended Reviews</h6>
        </v-col>

        <v-col cols="12">
          <v-card>
            <v-row class="pt-3 pb-3">
              <v-col cols="6">
                <v-list-item
                  prepend-avatar="https://cdn.vuetifyjs.com/images/john.png"
                  title="Collin L."
                >
                  <v-icon size="small">mdi-account-circle-outline</v-icon>
                  <span class="pl-1 pr-1">0</span>
                  <v-icon size="small">mdi-star-box</v-icon>
                  <span class="pl-1 pr-1">0</span>
                </v-list-item>
              </v-col>
              <v-col cols="6">
                <v-card-subtitle class="pt-2 pb-2">
                  <v-icon size="x-large">mdi-star-box</v-icon>
                  <v-icon size="x-large">mdi-star-box</v-icon>
                  <v-icon size="x-large">mdi-star-box</v-icon>
                  <v-icon size="x-large">mdi-star-box</v-icon>
                  <v-icon size="x-large">mdi-star-box</v-icon>
                </v-card-subtitle>
                <v-btn class="pl-4 pr-4 pt-3 pb-3 ml-5">add your review</v-btn>
              </v-col>
            </v-row>
          </v-card>
        </v-col>
        <v-col cols="12">
          <v-row>
            <v-col cols="4">
              <h3 class="pl-5 font-weight-bold">Overall rating</h3>
              <v-card-subtitle class="pt-2 pb-2">
                <v-icon size="x-large">mdi-star-box</v-icon>
                <v-icon size="x-large">mdi-star-box</v-icon>
                <v-icon size="x-large">mdi-star-box</v-icon>
                <v-icon size="x-large">mdi-star-box</v-icon>
                <v-icon size="x-large">mdi-star-box</v-icon>
              </v-card-subtitle>
              <p class="pl-5">319 reviews</p>
            </v-col>
            <v-col cols="8">
              <div class="pt-2 pb-2">
                <span>5 stars</span>
                <v-progress-linear
                  color="primary"
                  model-value="90"
                ></v-progress-linear>
              </div>
              <div class="pt-2 pb-2">
                <span>4 stars</span>
                <v-progress-linear
                  color="primary"
                  model-value="70"
                ></v-progress-linear>
              </div>
              <div class="pt-2 pb-2">
                <span>3 stars</span>
                <v-progress-linear
                  color="primary"
                  model-value="50"
                ></v-progress-linear>
              </div>
              <div class="pt-2 pb-2">
                <span>2 stars</span>
                <v-progress-linear
                  color="primary"
                  model-value="20"
                ></v-progress-linear>
              </div>
              <div class="pt-2 pb-2">
                <span>1 stars</span>
                <v-progress-linear
                  color="primary"
                  model-value="10"
                ></v-progress-linear>
              </div>
            </v-col>
          </v-row>
        </v-col>
        <v-col cols="12">
          <v-list-item
            prepend-avatar="https://cdn.vuetifyjs.com/images/john.png"
            title="Emily C."
            subtitle="Added 4 photos"
          >
          </v-list-item>
          <v-card-subtitle class="pt-2 pb-2">
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <span>3/8/2023</span>
          </v-card-subtitle>
          <p class="pt-2 pb-2">
            The burgers were so amazing and good as what they looked. Definitely
            a must go if you are craving for a burger. The selections were great
            and its so cool. The Sunrise Burger was good. The patty is just
            right and I enjoyed every bite of it. The service was good and very
            nice place.
          </p>
          <v-row>
            <v-col cols="5">
              <div class="d-flex flex-row justify-space-evenly">
                <v-btn density="compact" icon="mdi-lamp-outline"></v-btn>
                <v-btn density="compact" icon="mdi-hand-clap"></v-btn>
                <v-btn density="compact" icon="mdi-heart-cog-outline"></v-btn>
                <v-btn
                  density="compact"
                  icon="mdi-emoticon-excited-outline"
                ></v-btn>
              </div>
            </v-col>
          </v-row>
          <img
            src="../images/47456.jpg"
            alt=""
            class="catalog-img-item pt-6 pb-3"
          />
        </v-col>
        <v-col cols="12">
          <v-list-item
            prepend-avatar="https://cdn.vuetifyjs.com/images/john.png"
            title="Emily C."
            subtitle="Added 4 photos"
          >
          </v-list-item>
          <v-card-subtitle class="pt-2 pb-2">
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <span>3/8/2023</span>
          </v-card-subtitle>
          <p class="pt-2 pb-2">
            The burgers were so amazing and good as what they looked. Definitely
            a must go if you are craving for a burger. The selections were great
            and its so cool. The Sunrise Burger was good. The patty is just
            right and I enjoyed every bite of it. The service was good and very
            nice place.
          </p>
          <v-row>
            <v-col cols="5">
              <div class="d-flex flex-row justify-space-evenly">
                <v-btn density="compact" icon="mdi-lamp-outline"></v-btn>
                <v-btn density="compact" icon="mdi-hand-clap"></v-btn>
                <v-btn density="compact" icon="mdi-heart-cog-outline"></v-btn>
                <v-btn
                  density="compact"
                  icon="mdi-emoticon-excited-outline"
                ></v-btn>
              </div>
            </v-col>
          </v-row>
          <img
            src="../images/47456.jpg"
            alt=""
            class="catalog-img-item pt-6 pb-3"
          />
        </v-col>
        <v-col cols="12">
          <v-list-item
            prepend-avatar="https://cdn.vuetifyjs.com/images/john.png"
            title="Emily C."
            subtitle="Added 4 photos"
          >
          </v-list-item>
          <v-card-subtitle class="pt-2 pb-2">
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <v-icon size="small">mdi-star-box</v-icon>
            <span>3/8/2023</span>
          </v-card-subtitle>
          <p class="pt-2 pb-2">
            The burgers were so amazing and good as what they looked. Definitely
            a must go if you are craving for a burger. The selections were great
            and its so cool. The Sunrise Burger was good. The patty is just
            right and I enjoyed every bite of it. The service was good and very
            nice place.
          </p>
          <v-row>
            <v-col cols="5">
              <div class="d-flex flex-row justify-space-evenly">
                <v-btn density="compact" icon="mdi-lamp-outline"></v-btn>
                <v-btn density="compact" icon="mdi-hand-clap"></v-btn>
                <v-btn density="compact" icon="mdi-heart-cog-outline"></v-btn>
                <v-btn
                  density="compact"
                  icon="mdi-emoticon-excited-outline"
                ></v-btn>
              </div>
            </v-col>
          </v-row>
          <img
            src="../images/47456.jpg"
            alt=""
            class="catalog-img-item pt-6 pb-3"
          />
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

.tooltip-info {
  color: #b6b5b5;
  font-size: 16px;
}

.catalog-img-item {
  height: 300px;
}

.menu-card {
  height: 250px;
}

.menu-card-img,
.img-map-locations {
  width: 100%;
}
</style>
