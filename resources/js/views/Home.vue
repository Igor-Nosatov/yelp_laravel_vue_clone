<template>
  <v-row class="recent_activity  pt-8">
    <v-col cols="12">
      <h1 class="text-center">Recent Activity</h1>
    </v-col>
    <v-col cols="4">
      <BusinessCard />
    </v-col>
    <v-col cols="4">
      <BusinessCard />
    </v-col>
    <v-col cols="4">
      <BusinessCard />
    </v-col>
    <v-col cols="4">
      <BusinessCard />
    </v-col>
    <v-col cols="4">
      <BusinessCard />
    </v-col>
    <v-col cols="4">
      <BusinessCard />
    </v-col>
  </v-row>
  <v-row class="categories pt-8">
    <v-col cols="12">
      <h1 class="text-center">Categories</h1>
    </v-col>
    <v-col cols="12">
      <v-row>
        <v-col
          v-for="category in categories"
          :key="category.icon"
          cols="3"
          class="p-4"
        >
          <v-card class="category-item rounded-0" width="250" height="250">
            <v-card-item class="mx-auto mt-15">
              <v-card-subtitle class="d-flex flex-row justify-center">
                <v-icon
                  class="icon-style"
                  :color="category.color"
                  :icon="category.icon"
                  size="60px"
                ></v-icon>
              </v-card-subtitle>
              <v-card-title class="text-center">{{
                category.title
              }}</v-card-title>
            </v-card-item>
          </v-card>
        </v-col>
      </v-row>
    </v-col>
  </v-row>
</template>

<script>
import BusinessCard from "@/components/card/BusinessCard.vue";
import { ICON_CATEGORY_LIST } from "../helpers/constants/category_list";
import { ref } from "vue";

export default {
  components: {
    BusinessCard,
  },
  setup() {
    const categories = ref([
      {
        icon: "mdi-food-turkey",
        color: "error",
        title: "Restaurants",
      },
      {
        icon: "mdi-storefront-outline",
        color: "error",
        title: "Shopping",
      },
      {
        icon: "mdi-weather-night",
        color: "error",
        title: "Nightlife",
      },
      {
        icon: "mdi-beach",
        color: "error",
        title: "Active Life",
      },
      {
        icon: "mdi-face-woman-shimmer-outline",
        color: "error",
        title: "Beauty & Spas",
      },
      {
        icon: "mdi-train-car-autorack",
        color: "error",
        title: "Automotive",
      },
      {
        icon: "mdi-account-wrench",
        color: "error",
        title: "Home Services",
      },
      {
        icon: "mdi-office-building-marker-outline",
        color: "error",
        title: "Hotels & Travel",
      },
    ]);

    return {
      categories,
    };
  },
};
</script>

<style>
.custom-card,
.category-item {
  border: 1px solid #eceaea !important;
}

.category-item {
  margin: 10px;
}

.category-item:hover {
  border: 1px solid #dad6d6 !important;
  cursor: pointer;
}

.word-wrap {
  font-size: 14px !important;
  word-wrap: break-word !important;
}

.card-title {
  font-size: 16px !important;
}


</style>

