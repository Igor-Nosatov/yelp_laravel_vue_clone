<template>
    <v-row>
        <v-col cols="2">
            <h3 class="font-weight-bold">Filters</h3>
            <div class="d-flex flex-row">
                <v-checkbox class="price-filter">$</v-checkbox>
                <v-checkbox class="price-filter">$$</v-checkbox>
                <v-checkbox class="price-filter">$$$</v-checkbox>
                <v-checkbox class="price-filter">$$$$</v-checkbox>
            </div>
            <v-divider></v-divider>
            <h4 class="font-weight-bold pt-4">Suggested</h4>
            <div class=" pb-4">
                <v-checkbox label="Reservations" class="suggested-filter"></v-checkbox>
                <v-checkbox label="Offers Takeout" class="suggested-filter"></v-checkbox>
                <v-checkbox label="Offers Delivery" class="suggested-filter"></v-checkbox>
                <v-checkbox label="Open At:3:35 PM" class="suggested-filter"></v-checkbox>
            </div>
            <v-divider></v-divider>
            <h4 class="font-weight-bold pt-4">Category</h4>
            <div class="d-flex flex-row flex-wrap">
                <input type="checkbox" id="checkbox1">
                <label for="checkbox1">Italian</label>
                <input type="checkbox" id="checkbox2">
                <label for="checkbox2">Restaurants</label>
                <input type="checkbox" id="checkbox3">
                <label for="checkbox3">Bars</label>
                <input type="checkbox" id="checkbox4">
                <label for="checkbox4">Pizza</label>
            </div>
            <v-divider></v-divider>
            <h4 class="font-weight-bold pt-4">Features</h4>
            <div class=" pb-4">
                <v-checkbox label="Good for Groups" class="features-filter"></v-checkbox>
                <v-checkbox label="Good for Dinner" class="features-filter"></v-checkbox>
                <v-checkbox label="Outdoor Seating" class="features-filter"></v-checkbox>
                <v-checkbox label="Good for Kids" class="features-filter"></v-checkbox>
            </div>
            <v-divider></v-divider>
            <h4 class="font-weight-bold pt-4">Neighborhoods</h4>
            <div class=" pb-4">
                <v-checkbox label="Alamo Square" class="features-filter"></v-checkbox>
                <v-checkbox label="Anza Vista" class="features-filter"></v-checkbox>
                <v-checkbox label="Ashbury Heights" class="features-filter"></v-checkbox>
                <v-checkbox label="Balboa Terrace" class="features-filter"></v-checkbox>
            </div>
            <v-divider></v-divider>
            <h4 class="font-weight-bold pt-4">Distance</h4>
            <v-radio-group>
                <v-radio label="Bird's-eye View" value="1"></v-radio>
                <v-radio label="Driving (5 mi.)" value="2"></v-radio>
                <v-radio label="Biking (2 mi.)" value="3"></v-radio>
                <v-radio label="Walking (1 mi.)" value="4"></v-radio>
                <v-radio label="Within 4 blocks" value="5"></v-radio>
              </v-radio-group>
        </v-col>
        <v-col cols="10">
            <v-row class="breadcrumbs"></v-row>
            <v-row class="catalog_thema_and sorts"></v-row>
            <v-row class="business_items_block">
                <v-col cols="6">
                    <v-card  class="mx-auto catalog-card rounded-0">
                      <v-row>
                        <v-col cols="6" class="catalog-card-img">
                            <img src="@/images/348s.jpg" alt="" class="catalog-card-img">
                        </v-col>
                        <v-col cols="6"></v-col>
                      </v-row>
                    </v-card>
                </v-col>
            </v-row>
            <v-row class="pagination_block"></v-row>
            <v-row class="nearby_business_block"></v-row>
            <v-row class="related_top_topics_block"></v-row>
            <v-row class="frequently_ask_block"></v-row>
        </v-col>
    </v-row>
</template>
<script>
</script>
<style scoped>
.price-filter{
    font-size:12px !important;
    height: 50px !important;
}
.suggested-filter,.features-filter{
    font-size:12px !important;
    height: 40px !important;
}

input[type="checkbox"] {
    display: none;
  }

  label {
    display: inline-block;
    background-color: #e5e5e5;
    color: #333;
    padding: 5px 10px;
    border-radius: 20px;
    margin-right: 5px;
    margin-bottom: 5px;
    cursor: pointer;
  }

  input[type="checkbox"]:checked + label {
    background-color: #333;
    color: #fff;
  }

  .catalog-card{
    height: 250px;
    width:100%;
  }

  .catalog-card-img{
    height: 250px;
    object-fit: cover;
  }
</style>
