<template>
  <Header1 />
  <v-row class="router-view">
    <v-col cols="12"><router-view /></v-col>
  </v-row>
  <TopFooter class="background-grey"/>
  <BottomFooter  class="background-grey"/>
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
  min-height: 400px;
}

.background-grey{
    background-color: #e3e3e7;
}
</style>
