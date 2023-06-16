<template>
  <Header1  v-if="route.matched['0'].meta.Header1 === true"/>
  <Header2  v-if="route.matched['0'].meta.Header2 === true"/>
  <Header3  v-if="route.matched['0'].meta.Header3 === true"/>
  <Header4  v-if="route.matched['0'].meta.Header4 === true"/>
  <v-row class="router-view pb-8">
    <v-col cols="12">
        <router-view />
    </v-col>
  </v-row>
  <TopFooter class="background-grey"/>
  <BottomFooter  class="background-grey"/>
</template>

<script>
import { useRouter, useRoute } from 'vue-router'
import Header1 from "@/components/header/HeaderComponent1.vue";
import Header2 from "@/components/header/HeaderComponent2.vue";
import Header3 from "@/components/header/HeaderComponent3.vue";
import Header4 from "@/components/header/HeaderComponent4.vue";
import TopFooter from "@/components/footer/TopFooter.vue";
import BottomFooter from "@/components/footer/BottomFooter.vue";

export default {
  components: {
    Header1,
    Header2,
    Header3,
    Header4,
    TopFooter,
    BottomFooter,
  },
  setup() {
    const router = useRouter();
    const route = useRoute();
    return { router, route }
  },
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
    background-color: #efeff1;
}
</style>
