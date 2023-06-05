<template>
    <v-row  justify="center">
      <v-col cols="8">
        <v-row  justify="center">
            <v-col cols="8">

                <v-form v-model="valid">
                    <h2 class="text-h2">Hi-Way Burger & Fry</h2>
                    <v-rating v-model="rating" :readonly="true" :dense="true" :stars="5" :size="30" color="yellow-darken-3" class="pt-5 star-rating"></v-rating>
                    <v-chip-group  class="pt-6">
                        <v-chip>Food</v-chip>
                        <v-chip>Service</v-chip>
                        <v-chip>Ambiance</v-chip>
                      </v-chip-group>
                    <v-textarea label="Stay here your feedback" variant="outlined" class="pt-6"></v-textarea>
                    <v-row>
                        <v-col cols="4">
                            <v-btn
                            :loading="loading"
                            type="submit"
                            block
                            class="mt-2 font-weight-black"
                            text="Post Review"
                            color="red-darken-2"
                          ></v-btn>
                        </v-col>
                    </v-row>
                </v-form>
            </v-col>
          </v-row>
      </v-col>
    </v-row>
</template>
<script>
</script>
<style scoped>
.star-rating{
    font-size: 26px;
    padding: 3px;
}
</style>
