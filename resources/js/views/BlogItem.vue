<template>
  <v-row justify="center">
    <v-col cols="6">
      <v-row>
        <v-col cols="12" class="pt-12 pb-10">
          <a href="" class="news-title2 tex-left text-h5">NEWS</a>
        </v-col>
        <v-col cols="12">
          <h2 class="blog-item-title">
            Yelp adds new integrations with Toast and Reserve with Google,
            enables restaurants to simplify their front-of-house operations and
            grow diner traffic
          </h2>
        </v-col>
        <v-col cols="12">
          <v-divider></v-divider>
          <v-row class="pt-10 pb-8">
            <v-col cols="1">
              <img src="./../images/logo.png" alt="" height="50" width="120" />
            </v-col>
            <v-col cols="8"> </v-col>
            <v-col cols="3">
              <div class="d-flex flex-row justify-space-between pt-3">
                <v-icon size="x-large" class="feedback-icon"
                  >mdi-facebook</v-icon
                >
                <v-icon size="x-large" class="feedback-icon"
                  >mdi-twitter</v-icon
                >
                <v-icon size="x-large" class="feedback-icon"
                  >mdi-pinterest</v-icon
                >
                <v-icon size="x-large" class="feedback-icon"
                  >mdi-linkedin</v-icon
                >
                <v-icon size="x-large" class="feedback-icon"
                  >mdi-email-outline</v-icon
                >
              </div>
            </v-col>
          </v-row>
        </v-col>
        <v-col cols="12">
          <v-divider></v-divider>
          <p class="text-justify pt-8 pb-8 text-h5">
            Since launching Yelp Guest Manager, the Yelp for Restaurants team
            has continued to innovate to help restaurateurs simplify their
            front-of-house operations, deliver great guest experiences and grow
            diner traffic. Today, we’re announcing a series of new integrations
            and features for Yelp Guest Manager that will give restaurants
            access to the largest diner network,* and provide their
            front-of-house staff with even more control to help them run a
            smoother shift, turn tables more efficiently, and serve even more
            guests. Yelp Guest Manager now integrates with Toast to equip hosts
            with insights from the point of sale system; as well as integrates
            with Reserve with Google to enable diners to easily reserve a table,
            or join a waitlist, with restaurants in Yelp’s network directly from
            Google Search and Maps. Through our newest updates to Yelp Guest
            Manager, restaurant partners will now also be able to reduce empty
            tables by customizing credit card holds by shift, as well as better
            view and customize reservations directly from their Yelp for
            Business account. As restaurants digitize their operations, they’re
            looking to create a seamless and connected guest experience. Today’s
            news helps restaurants achieve just that, according to Reggie
            Guerrero, corporate operations manager at Shabuya and Yelp Guest
            Manager customer: “Yelp Guest Manager helps us to keep our
            front-of-house running smoothly. These new integrations with Toast
            and Reserve with Google will add simplicity to our daily operations
            and help us reach and seat more diners.”
          </p>
        </v-col>
        <v-col cols="12">

            <v-divider></v-divider>
            <h4 class="text-center text-h4 pt-6 pt-10 font-weight-bold">
                Did you find this post valuable?
            </h4>
            <p class="text-center text-body-1  pt-4">
                Click on a star to rate it.
            </p>
            <div class="d-flex flex-row justify-center   pt-2 pb-10">
                <v-icon size="x-large" class="feedback-icon1">mdi-star-outline</v-icon>
                <v-icon size="x-large" class="feedback-icon1">mdi-star-outline</v-icon>
                <v-icon size="x-large" class="feedback-icon1">mdi-star-outline</v-icon>
                <v-icon size="x-large" class="feedback-icon1">mdi-star-outline</v-icon>
                <v-icon size="x-large" class="feedback-icon1">mdi-star-outline</v-icon>
              </div>
            <v-divider></v-divider>
            <p class="text-justify  pt-10 pb-10 font-weight-thin">
                The information above is provided for educational and informational purposes only. It is not intended to be a substitute
                for professional advice and may not be suitable for your circumstances.
                Unless stated otherwise, references to third-party links, services, or products do not constitute endorsement by Yelp.
            </p>
            <v-divider></v-divider>
        </v-col>
      </v-row>
    </v-col>
  </v-row>
  <v-row justify="center">
    <v-col cols="8">
      <v-row>
        <v-col cols="12" class="pt-8 ">
            <div class="subscribe-block rounded-lg pt-8 pb-8">
              <h3 class="text-center font-weight-bold subscribe-title">
                Business resources, delivered to your inbox
              </h3>
              <h3
                class="text-center font-weight-light subscribe-subtitle pb-6"
              >
                Get the latest blog content, info on virtual events, and the
                occasional freebie.
              </h3>

              <v-form validate-on="submit lazy" @submit.prevent="submit" class="pt-4">
                <v-row justify="center">
                    <v-col cols="3">
                        <v-text-field
                        v-model="userEmail"
                        :rules="rules"
                        label="youremail@address.com"
                        class="rounded-2 input-subscribe"
                      ></v-text-field>
                    </v-col>
                    <v-col cols="2">
                        <v-btn
                        :loading="loading"
                        type="submit"
                        block
                        class="rounded-2 btn-subscribe"
                        text="Submit"
                      ></v-btn>
                    </v-col>
                </v-row>
              </v-form>
              <v-row  justify="center">
                <v-col cols="5">
                    <p class="subscribe-text pt-5">By continuing, you agree to Yelp’s Terms of Service and acknowledge</p>
                    <p  class=" subscribe-text pt-2">Yelp’s Privacy Policy.</p>
                </v-col>
              </v-row>
            </div>
          </v-col>
        <v-col cols="12">
          <h3 class="text-left font-weight-black text-h3 pl-7 pt-6 pb-6">
            You may also like
          </h3>
          <v-row>
            <v-col cols="4">
              <v-card class="mx-auto" max-width="344">
                <v-img
                  src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                  height="200px"
                  cover
                ></v-img>
                <v-card-title>
                  <a href="" class="news-title">NEWS</a>
                </v-card-title>
                <v-card-title>
                  <a href="" class="news-title1"
                    >Yelp adds new integrations with Toast and Reserve with
                    Google</a
                  >
                </v-card-title>
                <p class="pl-4 pr-4 pt-5 tex-left blog-text-date">
                  May 15, 2023
                </p>
                <p class="pl-4 pr-4 text-justify pt-5">
                  Yelp Guest Manager that will give restaurants access to the
                  largest diner network,* and provide their front-of-house staff
                </p>
                <v-card-actions>
                  <v-btn color="teal-lighten-2" variant="text">
                    Read more
                    <v-icon size="x-large" icon="mdi-arrow-right-thin"></v-icon>
                  </v-btn>
                  <v-spacer></v-spacer>
                </v-card-actions>
              </v-card>
            </v-col>
            <v-col cols="4">
              <v-card class="mx-auto" max-width="344">
                <v-img
                  src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                  height="200px"
                  cover
                ></v-img>
                <v-card-title>
                  <a href="" class="news-title">NEWS</a>
                </v-card-title>
                <v-card-title>
                  <a href="" class="news-title1"
                    >Yelp adds new integrations with Toast and Reserve with
                    Google</a
                  >
                </v-card-title>
                <p class="pl-4 pr-4 pt-5 tex-left blog-text-date">
                  May 15, 2023
                </p>
                <p class="pl-4 pr-4 text-justify pt-5">
                  Yelp Guest Manager that will give restaurants access to the
                  largest diner network,* and provide their front-of-house staff
                </p>
                <v-card-actions>
                  <v-btn color="teal-lighten-2" variant="text">
                    Read more
                    <v-icon size="x-large" icon="mdi-arrow-right-thin"></v-icon>
                  </v-btn>
                  <v-spacer></v-spacer>
                </v-card-actions>
              </v-card>
            </v-col>
            <v-col cols="4">
              <v-card class="mx-auto" max-width="344">
                <v-img
                  src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                  height="200px"
                  cover
                ></v-img>
                <v-card-title>
                  <a href="" class="news-title">NEWS</a>
                </v-card-title>
                <v-card-title>
                  <a href="" class="news-title1"
                    >Yelp adds new integrations with Toast and Reserve with
                    Google</a
                  >
                </v-card-title>
                <p class="pl-4 pr-4 pt-5 tex-left blog-text-date">
                  May 15, 2023
                </p>
                <p class="pl-4 pr-4 text-justify pt-5">
                  Yelp Guest Manager that will give restaurants access to the
                  largest diner network,* and provide their front-of-house staff
                </p>
                <v-card-actions>
                  <v-btn color="teal-lighten-2" variant="text">
                    Read more
                    <v-icon size="x-large" icon="mdi-arrow-right-thin"></v-icon>
                  </v-btn>
                  <v-spacer></v-spacer>
                </v-card-actions>
              </v-card>
            </v-col>
          </v-row>
        </v-col>
        <v-col cols="12">
          <h3 class="text-center font-weight-black text-h5 pt-12 pb-6">
            Follow us on
          </h3>
          <v-row justify="center">
            <v-col cols="6">
              <div class="d-flex flex-row justify-space-between pt-6">
                <v-btn class="btn-followers">
                  <v-icon size="x-large" icon="mdi-instagram"></v-icon>
                  <span class="pl-4">@Yelp</span>
                </v-btn>
                <v-btn class="btn-followers">
                  <v-icon size="x-large" icon="mdi-linkedin"></v-icon>
                  <span class="pl-4">@Yelp</span>
                </v-btn>
                <v-btn class="btn-followers">
                  <v-icon size="x-large" icon="mdi-twitter"></v-icon>
                  <span class="pl-4">@Yelp</span>
                </v-btn>
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
.blog-item-title {
  color: #0c0c0c;
  font-weight: bolder;
  text-align: justify;
  font-size: 40px;
  font-stretch: wider;
}
.btn-followers {
  width: 200px;
  height: 60px;
  background-color: #080522;
  color: #fff;
  font-weight: bold;
}
.news-title {
  text-decoration: none;
  color: #f73d3d;
}
.news-title1 {
  text-decoration: none;
  color: #0c0c0c;
  font-weight: bolder;
}
.news-title2 {
  text-decoration: none;
  color: #f73d3d;
  font-weight: bolder;
}
.blog-text-date {
  color: #c8cacc;
  font-weight: 500;
}

.subscribe-block {
  background: #2b273c;
  height: 500px;
}
.subscribe-title {
  color: #fff;
  padding: 40px 120px;
  font-size:40px;
}

.subscribe-subtitle {
  color: #d6d1d1;
  padding: 5px 80px;
  font-size:25px;
}
.btn-subscribe{
    height: 50px !important;
    width: 100px !important;
    background-color: #f73d3d;
    color: #fff;
    font-weight:bold;
}
.input-subscribe{
background-color: #fff !important;
height: 50px !important;
border-radius: 3px;
}
.subscribe-text{
    color: #d6d1d1;
    font-size: 14px;
}

.feedback-icon1{
    color:#eaec56;
    font-size:80px;
}
</style>
