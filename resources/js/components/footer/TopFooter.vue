<template>
    <v-row class="top-footer">
        <v-col cols="3">
          <h6 class="text-h6 text-center font-weight-bold">About</h6>
          <v-card class="mx-auto" max-width="300">
            <v-list :items="listAbout"></v-list>
          </v-card>
        </v-col>
        <v-col cols="3">
          <h6 class="text-h6 text-center font-weight-bold">Discover</h6>
          <v-card class="mx-auto" max-width="300">
            <v-list :items="listDiscover"></v-list>
          </v-card>
        </v-col>
        <v-col cols="3">
          <h6 class="text-h6 text-center font-weight-bold">Yelp for Business</h6>
          <v-card class="mx-auto" max-width="300">
            <v-list :items="listBusiness"></v-list>
          </v-card>
        </v-col>
        <v-col cols="3">
          <h6 class="text-h6 text-center font-weight-bold">Languages</h6>
          <v-select
            v-model="selectListLanguage"
            :items="listLanguage"
            item-text="title"
            item-value="value"
            label="Select Language"
          ></v-select>
          <h6 class="text-h6 text-center font-weight-bold">Countries</h6>
          <v-select
            v-model="selectListCountry"
            :items="listCountry"
            label="Select Country"
            item-text="title"
            item-value="value"
          ></v-select>
        </v-col>
      </v-row>
</template>

<script>
import { reactive } from "vue";
import { LIST_ABOUT } from "../../helpers/constants/footer_list";
import { LIST_DISCOVER } from "../../helpers/constants/footer_list";
import { LIST_BUSINESS } from "../../helpers/constants/footer_list";
import { LIST_LANGUAGE} from "../../helpers/constants/footer_list";
import { LIST_COUNTRY} from "../../helpers/constants/footer_list";

const listAbout = reactive(LIST_ABOUT);
const listDiscover = reactive(LIST_DISCOVER);
const listBusiness = reactive(LIST_BUSINESS);
const listLanguage = LIST_LANGUAGE;
const listCountry =  LIST_COUNTRY;

export default {
  setup() {
    const stateData = reactive({
      selectListLanguage: { title: "English (Australia)", value: "en-AU" },
      selectListCountry: { title: "United States", value: "united-states" },
    });
    return {
      listAbout,
      listDiscover,
      listBusiness,
      listLanguage,
      listCountry,
      ...stateData,
    };
  },
};
</script>
