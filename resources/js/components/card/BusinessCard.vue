<template>
  <v-card class="mx-auto custom-card rounded-0">
    <v-card-title>
      <v-list>
        <v-list-item>
          <v-avatar>
            <img src="https://cdn.vuetifyjs.com/images/john.png" alt="Avatar">
          </v-avatar>
          <v-list-item-content>
            <v-list-item-title class="title">Emily C.</v-list-item-title>
            <v-list-item-subtitle>Added 4 photos</v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-card-title>
    <v-img src="https://cdn.vuetifyjs.com/images/cards/house.jpg" class="align-end" height="170px" width="100%" :aspect-ratio="4/3" cover></v-img>
    <v-card-subtitle class="text-leftr">
      <v-rating v-model="rating" :readonly="true" :dense="true" :stars="5" :size="30" color="yellow-darken-3" class="pt-5 star-rating"></v-rating>
    </v-card-subtitle>
    <v-card-text>
      <h5 class="pb-4 font-weight-bold text-h5">Wandered in here for a light bite & smoothie</h5>
      <a href="https://example.com" target="_blank" class="text-decoration-none">Continue reading</a>
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
<style  scoped>
.star-rating{
    font-size: 26px;
    padding: 3px;
}
</style>


