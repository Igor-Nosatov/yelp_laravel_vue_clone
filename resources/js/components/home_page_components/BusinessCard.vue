<template>
    <v-card class="mx-auto custom-card rounded-0">
      <v-card-title>
        <v-list>
          <v-list-item>
            <v-avatar>
              <img src="https://cdn.vuetifyjs.com/images/john.png" alt="Avatar" />
            </v-avatar>
            <v-list-item-content>
              <v-list-item-title class="card-title">Emily C.</v-list-item-title>
              <v-list-item-subtitle>Added {{ cardData.photos_count }} photos</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-card-title>
      <v-img
        :src="cardData.photos[0].path"
        class="align-end card-image"
        height="170px"
        width="100%"
        :aspect-ratio="4 / 3"
        cover
      ></v-img>
      <v-card-subtitle class="text-left">
        <span v-for="n in cardData.average_rating" :key="n">
          <v-icon class="star-rating" >mdi-star</v-icon>
        </span>
      </v-card-subtitle>
      <v-card-text>
        <h5 class="pb-4 font-weight-bold text-h5">{{ cardData.address }}</h5>
        <a href="https://example.com" target="_blank" class="text-link">Continue reading</a>
      </v-card-text>
      <v-divider></v-divider>
      <v-card-actions class="d-flex justify-start pt-3">
        <v-tooltip bottom>
          <template v-slot:activator="{ on }">
            <v-btn v-on="on" text icon>
              <v-icon>mdi-thumb-up</v-icon>
            </v-btn>
          </template>
          <span>Useful</span>
        </v-tooltip>
        <v-tooltip bottom>
          <template v-slot:activator="{ on }">
            <v-btn v-on="on" text icon>
              <v-icon>mdi-emoticon-outline</v-icon>
            </v-btn>
          </template>
          <span>Funny</span>
        </v-tooltip>
        <v-tooltip bottom>
          <template v-slot:activator="{ on }">
            <v-btn v-on="on" text icon>
              <v-icon>mdi-emoticon-cool-outline</v-icon>
            </v-btn>
          </template>
          <span>Cool</span>
        </v-tooltip>
      </v-card-actions>
    </v-card>
  </template>

  <script>
  export default {
    props: ["cardData"],
  };
  </script>
<style scoped>
  .card {
    background-color: #f5f5f5;
    border-radius: 8px;
    padding: 16px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  }

  .card-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 4px;
  }

  .card-image {
    align-self: flex-end;
  }

  .star-rating {
    margin-top: 20px;
    font-size: 36px;
    padding: 6px;
    color: #ffd600;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  }

  .text-left {
    text-align: left;
  }

  .text-h5 {
    font-size: 20px;
  }

  .text-link {
    text-decoration: none;
  }

  .pt-3 {
    padding-top: 12px;
  }

</style>
