<template>
  <Header1 />
  <v-row class="router-view">
    <v-col cols="1"></v-col>
    <v-col cols="10"><router-view /></v-col>
    <v-col cols="1"></v-col>
  </v-row>
  <TopFooter />
  <BottomFooter />
</template>

<script>
import Header1 from "@/components/header/HeaderComponent.vue";
import Header2 from "@/components/header/HeaderComponent.vue";
import TopFooter from "@/components/footer/TopFooter.vue";
import BottomFooter from "@/components/footer/BottomFooter.vue";

export default {
  components: {
    Header1,
    Header2,
    TopFooter,
    BottomFooter,
  },
  setup() {},
};
</script>
<style scoped>
.app-container {
  padding: 0 !important;
  margin: 0 !important;
  width: 100% !important;
}
.router-view {
  margin-top: 100px;
  margin-bottom: 100px;
  min-height: 400px;
}
</style>
