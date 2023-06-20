<template>
    <v-row class="recent_activity pt-8">
      <v-col cols="12">
        <h1 class="text-center pb-6">Recent Activity</h1>
      </v-col>
      <v-row justify="center" class="business-row">
        <v-col cols="12" sm="8">
          <v-row class="pt-6">
            <v-col cols="12" sm="6" md="4" lg="4" v-for="item in businessCatalogData" :key="item.id">
              <BusinessCard :cardData="item" />
            </v-col>
          </v-row>
        </v-col>
      </v-row>
    </v-row>
    <v-row class="categories pt-8">
      <v-col cols="12">
        <h1 class="text-center">Categories</h1>
      </v-col>
      <v-col cols="12">
        <v-row justify="center">
          <v-col cols="8">
            <v-row class="category-row" justify="center">
                <v-col cols="12" sm="6" md="4" lg="3" v-for="category in categories" :key="category.title">
                  <v-card class="category-item rounded-0" height="250">
                    <v-card-item class="mx-auto mt-15">
                      <v-card-subtitle class="d-flex flex-row justify-center">
                        <v-icon
                          class="icon-style"
                          :color="category.color"
                          :icon="category.icon"
                          size="60px"
                        ></v-icon>
                      </v-card-subtitle>
                      <v-card-title class="text-center">
                        {{ category.title }}
                      </v-card-title>
                    </v-card-item>
                  </v-card>
                </v-col>
              </v-row>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </template>

  <script>
  import { ref, onMounted } from "vue";
  import { storeToRefs } from "pinia";
  import BusinessCard from "@/components/card/BusinessCard.vue";
  import { useHomeStore } from "../store/home/useHomeStore";
  import { ICON_CATEGORY_LIST } from "../helpers/constants/category_list";

  export default {
    components: {
      BusinessCard,
    },
    setup() {
    const store = useHomeStore();
    const { businessCatalogData } = storeToRefs(store);
    const { fetchAllBusinessCatalogData } = useHomeStore();

    const categories = ref(ICON_CATEGORY_LIST);

      onMounted(async () => {
        try {
        fetchAllBusinessCatalogData();
        } catch (error) {
          console.error(error);
        }
      });
      return {
        categories,
        businessCatalogData,
      };
    },
  };
  </script>

  <style scoped>
  .business-row {
    padding-top: 48px;
  }
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

  .recent_activity {
    background-color: #f2f2f2;
    padding: 24px;
  }

  .text-center {
    text-align: center;
  }

  .pb-6 {
    padding-bottom: 36px;
  }

  .pt-6 {
    padding-top: 36px;
  }

  .pt-8 {
    padding-top: 48px;
  }

  .pt-8,
  .pt-8 .pt-8 {
    padding-top: 48px;
  }

  .p-4 {
    padding: 16px;
  }

  .icon-style {
    margin-top: 15px;
  }

  .categories {
    background-color: #ffffff;
    padding: 24px;
  }

  .category-item {
    transition: border-color 0.3s;
  }

  .text-center {
    text-align: center;
  }

  .mt-15 {
    margin-top: 15px;
  }
  </style>
