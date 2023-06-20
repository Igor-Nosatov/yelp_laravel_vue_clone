<template>
    <v-container fluid>
      <v-row class="header-main1 no-gutters pt-5">
        <v-col cols="12" sm="2">
          <img src="@/images/logo.png" alt="Yelp" class="logo-img pl-6" />
        </v-col>
        <v-col cols="12" sm="5" class="d-flex flex-row">
          <v-select
            label="Select"
            :items="[
              'California',
              'Colorado',
              'Florida',
              'Georgia',
              'Texas',
              'Wyoming',
            ]"
            class="height-select-btn pt-1"
          ></v-select>
          <v-select
            label="Select"
            :items="[
              'California',
              'Colorado',
              'Florida',
              'Georgia',
              'Texas',
              'Wyoming',
            ]"
            class="height-select-btn pt-1"
          ></v-select>
          <v-btn class="rounded-0 search-btn">
            <v-icon class="x-large">mdi-magnify</v-icon>
          </v-btn>
        </v-col>
        <v-col cols="12" sm="5" class="pt-5">
          <v-btn class="rounded-0 text-capitalize font-weight-bold" size="large">
            Add a Business
          </v-btn>
          <v-btn class="rounded-0 text-capitalize font-weight-bold" size="large">
            Yelp for Business
          </v-btn>
          <v-btn class="rounded-0 text-capitalize font-weight-bold" size="large">
            Write Review
          </v-btn>
          <v-btn class="primary rounded-0 font-weight-bold" size="large">
            Login
          </v-btn>
          <v-btn class="signup-btn rounded-0 font-weight-bold" size="large">
            Sign Up
          </v-btn>
        </v-col>
      </v-row>
      <v-row justify="center" class="promo-background">
        <v-col cols="12" sm="8">
          <h4 class="promo-title">Satisfy your cravings!!!</h4>
          <v-btn color="red darken-3" class="promo-btn rounded-0">
            <router-link
              :to="{ name: 'catalog' }"
              class="text-decoration-none promo-btn-title font-weight-bold text-capitalize"
            >
              Go to catalog
            </router-link>
          </v-btn>
        </v-col>
      </v-row>

      <v-divider></v-divider>
    </v-container>
  </template>

  <style scoped>
  .header-main1 {
    background-color: #b1b1b1;
  }

  .logo-img {
    padding-top: 5px;
    height: 60px;
  }

  .v-btn {
    font-size: 12px;
    margin: 2px;
  }

  .signup-btn,
  .search-btn {
    background-color: #e00707;
    color: #fff;
    font-weight: 400;
    text-align: center;
    font-size: 12px;
  }

  .promo-btn {
    height: 50px !important;
  }

  .promo-btn-title {
    color: #fdfdfd !important;
    font-size: 18px;
  }

  .login_btn {
    background-color: transparent;
    border: 1px #050505 !important;
    color: #050505;
    font-weight: 600;
    text-align: center;
    font-size: 12px;
  }

  .pink-border {
    border-color: pink;
  }

  .search-btn {
    height: 56px !important;
    margin-top: 4px;
  }

  .x-large {
    font-size: 35px;
  }

  .height-select-btn {
    height: 73px !important;
  }

  .title-catch-phrase {
    width: 100%;
    font-size: 30px;
    padding-left: 16%;
    position: relative;
    top: -90px;
    right: 20px;
    color: #fdfdfd;
  }

  .account-icon {
    font-size: 38px;
  }

  .menu-list {
    width: 200px;
  }

  .promo-background {
    background-image: url("../../images/45656.jpg");
    background-repeat: no-repeat;
    background-position: center;
    /* Center the image */
    background-size: cover;
    /* Resize the background image to cover the entire container */
    height: 500px;
  }

  .promo-title {
    padding-top: 200px;
    padding-bottom: 10px;
    color: #ffffff;
    font-size: 50px;
    text-shadow: 3px 5px 2px #474747;
  }

  .logo-img {
    padding-top: 5px;
    height: 60px;
  }

  .v-btn {
    font-size: 12px;
    margin: 2px;
  }

  .signup-btn,
  .search-btn {
    background-color: #e00707;
    color: #fff;
    font-weight: 400;
    text-align: center;
    font-size: 12px;
  }

  .promo-btn {
    height: 50px !important;
  }

  .promo-btn-title {
    color: #fdfdfd !important;
    font-size: 18px;
  }

  .search-btn {
    height: 56px !important;
    margin-top: 4px;
  }

  .x-large {
    font-size: 35px;
  }

  .height-select-btn {
    height: 73px !important;
  }

  .promo-background {
    background-image: url("../../images/45656.jpg");
    background-repeat: no-repeat;
    background-position: center;
    /* Center the image */
    background-size: cover;
    /* Resize the background image to cover the entire container */
    height: 500px;
  }

  .promo-title {
    padding-top: 200px;
    padding-bottom: 10px;
    color: #ffffff;
    font-size: 50px;
    text-shadow: 3px 5px 2px #474747;
  }

  </style>
