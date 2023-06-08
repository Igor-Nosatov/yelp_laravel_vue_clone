<template>
    <v-row class="top-footer pt-8" justify="center" >
        <v-col cols="8">
            <v-row>
                <v-col cols="3">
                    <h6 class="text-h6 pl-4 font-weight-bold pt-3 pb-2 text-left">About</h6>
                    <v-divider></v-divider>
                      <v-list :items="listAbout" class="background-grey"></v-list>
                  </v-col>
                  <v-col cols="3">
                    <h6 class="text-h6 pl-4 font-weight-bold pt-3 pb-2">Discover</h6>
                    <v-divider></v-divider>
                      <v-list :items="listDiscover" class="background-grey"></v-list>
                  </v-col>
                  <v-col cols="3">
                    <h6 class="text-h6 pl-4 font-weight-bold pt-3 pb-2">Yelp for Business</h6>
                    <v-divider></v-divider>
                      <v-list :items="listBusiness" class="background-grey"></v-list>
                  </v-col>
                  <v-col cols="3">
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
                      class="pr-6 pl-6  pt-6"
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
<style scoped>
.background-grey{
    background-color: #efeff1;
}
</style>
