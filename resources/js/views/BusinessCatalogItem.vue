<template>
  <v-row>
    <v-col cols="12" class="title-block ">
        <v-row  justify="center">
            <v-col cols="6">
                <h2 class="text-h2 text-left">Columbus Burgers</h2>
                <div class="d-flex flex-row justify-left">
                  <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
                  <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
                  <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
                  <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
                  <v-icon size="x-large" class="feedback-icon">mdi-star-box</v-icon>
                  <span class="text-reviews"> 4.4 (36 reviews)</span>
                </div>
            </v-col>
        </v-row>
    </v-col>
  </v-row>
</template>
.
<script>
</script>
<style scoped>
.title-block {
  background-image: url("../images/bg.jpg");
  height: 500px;
  background-size: cover !important;
  background-repeat: no-repeat, no-repeat;
}
.feedback-icon {
  color: #fa891e;
  font-size: 60px;
}
.text-h2{
padding-top: 160px;
}
.text-reviews{
    padding-top: 28px;
}
.text-h2,.text-reviews{
    color:#fff;
    font-weight:bold
}
</style>
