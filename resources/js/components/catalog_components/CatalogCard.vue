<template>
    <v-col cols="6">
      <v-card class="rounded-0 d-flex flex-row" width="610" height="375">
        <div>
          <img :src="cardData.photos[0].path" height="375" width="300" :aspect-ratio="4 / 3" cover />
        </div>
        <div>
          <h4 class="title-catalog-item ">{{ cardData.name }}</h4>
          <div class="chip-list d-flex flex-column mx-auto pl-2">
            <div class="street pl-3">
              <h5>Address:{{ cardData.address }}</h5>
            </div>
          </div>

          <h5 class=" pl-3">Amenities:</h5>
          <div class="short-feature-list d-flex flex-row mx-auto pl-2 pr-2" v-for="item in cardData.amenities" :key="item.id">
            <div class="d-flex flex-row flex-wrap">
              <v-icon class="mdi">mdi-check</v-icon>
              <h6 class="text-subtitle-2">{{ item.name }}</h6>
            </div>
          </div>


          <router-link
          :to="{ name: 'catalog-item', params: { id: cardData.id }}"
          class="mr-2 text-decoration-none"
          ><v-btn class="ml-5 mt-2">More detail</v-btn>

        </router-link>
        </div>
      </v-card>
    </v-col>
  </template>

  <script>
  export default {
    props: ["cardData"],
  };
  </script>

  <style scoped>
  .chip-list {
    margin-bottom: 1rem;
  }

  .title-catalog-item {
    margin-left: 1.25rem;
    cursor: pointer;
  }

  .price-type,
  .street {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .short-feature-list {
    padding-left: 1.25rem;

    padding-right: 1.25rem;
  }

  .text-subtitle-2 {
    margin-left: 0.25rem;
  }

  .mdi {
    margin-right: 0.25rem;
  }

  /* Add the following CSS to apply Material Design styles */
  .v-chip {
    border-radius: 9999px;
    background-color: var(--v-primary-base);
    color: var(--v-background-base);
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .v-chip.mr-1 {
    margin-right: 0.5rem;
  }

  .v-icon.mdi {
    font-size: 1rem;
  }

  .title-catalog-item {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
  }

  .price-type h5,
  .street h5 {
    font-size: 1rem;
    font-weight: bold;
    margin: 0;
  }

  .short-feature-list .text-subtitle-2 {
    font-size: 0.875rem;
    font-weight: bold;
    margin: 0;
  }
  </style>
