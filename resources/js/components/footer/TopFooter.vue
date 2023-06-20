<template>
    <v-row class="top-footer pt-8" justify="center">
      <v-col cols="12" sm="8" md="6" lg="8">
        <v-row>
          <v-col cols="12" sm="6" md="6" lg="3" v-for="section in footerSections" :key="section.title">
            <h6 class="text-h6 pl-4 font-weight-bold pt-3 pb-2 text-left">{{ section.title }}</h6>
            <v-divider></v-divider>
            <v-list :items="section.items" class="background-grey"></v-list>
          </v-col>
          <v-col cols="12" sm="6" md="6" lg="3">
            <h6 class="text-h6 pl-4 font-weight-bold pt-3 pb-2">Languages</h6>
            <v-divider></v-divider>
            <v-select
              v-model="selectListLanguage"
              :items="listLanguage"
              item-text="title"
              item-value="value"
              label="Select Language"
              class="pr-6 pl-6 pt-6"
            ></v-select>
            <h6 class="text-h6 pl-4 font-weight-bold pt-3 pb-2">Countries</h6>
            <v-divider></v-divider>
            <v-select
              v-model="selectListCountry"
              :items="listCountry"
              label="Select Country"
              item-text="title"
              item-value="value"
              class="pr-6 pl-6 pt-6"
            ></v-select>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </template>

  <script>
  import { reactive } from "vue";
  import { LIST_ABOUT } from "../../helpers/constants/footer_list";
  import { LIST_DISCOVER } from "../../helpers/constants/footer_list";
  import { LIST_BUSINESS } from "../../helpers/constants/footer_list";
  import { LIST_LANGUAGE } from "../../helpers/constants/footer_list";
  import { LIST_COUNTRY } from "../../helpers/constants/footer_list";

  const listAbout = reactive(LIST_ABOUT);
  const listDiscover = reactive(LIST_DISCOVER);
  const listBusiness = reactive(LIST_BUSINESS);
  const listLanguage = LIST_LANGUAGE;
  const listCountry = LIST_COUNTRY;

  export default {
    setup() {
      const stateData = reactive({
        selectListLanguage: { title: "English (Australia)", value: "en-AU" },
        selectListCountry: { title: "United States", value: "united-states" },
      });
      return {
        footerSections: [
          { title: "About", items: listAbout },
          { title: "Discover", items: listDiscover },
          { title: "Yelp for Business", items: listBusiness },
        ],
        listLanguage,
        listCountry,
        ...stateData,
      };
    },
  };
  </script>

  <style scoped>
  .top-footer {
    background-color: #f5f5f5;
    padding-top: 48px;
  }

  .text-h6 {
    font-size: 18px;
  }

  .pl-4 {
    padding-left: 16px;
  }

  .pb-2 {
    padding-bottom: 8px;
  }

  .text-left {
    text-align: left;
  }

  .background-grey {
    background-color: #efeff1;
  }

  .pr-6 {
    padding-right: 24px;
  }

  .pl-6 {
    padding-left: 24px;
  }

  .pt-6 {
    padding-top: 24px;
  }
  </style>
