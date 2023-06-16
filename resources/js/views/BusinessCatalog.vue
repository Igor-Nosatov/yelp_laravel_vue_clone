<template>
    <v-row justify="center">
        <v-col cols="10"  align-self="center">
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
                  <div class="pb-4">
                    <v-checkbox label="Reservations" class="suggested-filter"></v-checkbox>
                    <v-checkbox label="Offers Takeout" class="suggested-filter"></v-checkbox>
                    <v-checkbox label="Offers Delivery" class="suggested-filter"></v-checkbox>
                    <v-checkbox label="Open At:3:35 PM" class="suggested-filter"></v-checkbox>
                  </div>
                  <v-divider></v-divider>
                  <h4 class="font-weight-bold pt-4">Category</h4>
                  <div class="d-flex flex-row flex-wrap">
                    <input type="checkbox" id="checkbox1" />
                    <label for="checkbox1">Italian</label>
                    <input type="checkbox" id="checkbox2" />
                    <label for="checkbox2">Restaurants</label>
                    <input type="checkbox" id="checkbox3" />
                    <label for="checkbox3">Bars</label>
                    <input type="checkbox" id="checkbox4" />
                    <label for="checkbox4">Pizza</label>
                  </div>
                  <v-divider></v-divider>
                  <h4 class="font-weight-bold pt-4">Features</h4>
                  <div class="pb-4">
                    <v-checkbox label="Good for Groups" class="features-filter"></v-checkbox>
                    <v-checkbox label="Good for Dinner" class="features-filter"></v-checkbox>
                    <v-checkbox label="Outdoor Seating" class="features-filter"></v-checkbox>
                    <v-checkbox label="Good for Kids" class="features-filter"></v-checkbox>
                  </div>
                  <v-divider></v-divider>
                  <h4 class="font-weight-bold pt-4">Neighborhoods</h4>
                  <div class="pb-4">
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
                  <v-row class="breadcrumbs">
                    <v-col>
                      <v-breadcrumbs :items="crumbs" class="font-weight-bold text-h6">
                        <template v-slot:prepend>
                          <v-icon size="small" icon="mdi-baguette"></v-icon>
                        </template>
                      </v-breadcrumbs>
                    </v-col>
                  </v-row>
                  <v-row class="catalog_thema_and sorts">
                    <v-col cols="7">
                      <h2>Best Burgers near me in San Francisco, California</h2>
                    </v-col>
                    <v-col cols="4">
                      <v-select
                        v-model="selectedSortOptions"
                        :items="sortOptions"
                        label="Sort By"
                        item-text="name"
                        item-value="id"
                      ></v-select>
                    </v-col>
                    <v-col cols="1">
                      <div>
                        <v-icon
                          size="small"
                          icon="mdi-information-outline"
                          v-bind="attrs"
                          v-on="on"
                        ></v-icon>
                        <v-tooltip activator="parent" location="top"
                          >Sorts non-Sponsored Results based <br />on factors like search terms,
                          <br />distance, and ratings.</v-tooltip
                        >
                      </div>
                    </v-col>
                  </v-row>
                  <v-row class="top-rated">
                    <v-col cols="3">
                      <v-card width="300" height="500" class="rounded-0">
                        <img
                          src="./../images/top.jpg"
                          alt=""
                          width="300"
                          height="300"
                          class="rounded-0"
                        />
                        <v-card-title>Burger King</v-card-title>
                        <v-card-text>
                          95 reviews <br />
                          Burgers, Fast Food, American (New)
                        </v-card-text>
                        <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
                        <v-card-text class="text-center">
                          <a href=""> Open </a> until 10:00 PM
                        </v-card-text>
                      </v-card>
                    </v-col>
                    <v-col cols="3">
                      <v-card width="300" height="500" class="rounded-0">
                        <img
                          src="./../images/top.jpg"
                          alt=""
                          width="300"
                          height="300"
                          class="rounded-0"
                        />
                        <v-card-title>Burger King</v-card-title>
                        <v-card-text>
                          95 reviews <br />
                          Burgers, Fast Food, American (New)
                        </v-card-text>
                        <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
                        <v-card-text class="text-center">
                          <a href=""> Open </a> until 10:00 PM
                        </v-card-text>
                      </v-card>
                    </v-col>
                    <v-col cols="3">
                      <v-card width="300" height="500" class="rounded-0">
                        <img
                          src="./../images/top.jpg"
                          alt=""
                          width="300"
                          height="300"
                          class="rounded-0"
                        />
                        <v-card-title>Burger King</v-card-title>
                        <v-card-text>
                          95 reviews <br />
                          Burgers, Fast Food, American (New)
                        </v-card-text>
                        <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
                        <v-card-text class="text-center">
                          <a href=""> Open </a> until 10:00 PM
                        </v-card-text>
                      </v-card>
                    </v-col>
                    <v-col cols="3">
                      <v-card width="300" height="500" class="rounded-0">
                        <img
                          src="./../images/top.jpg"
                          alt=""
                          width="300"
                          height="300"
                          class="rounded-0"
                        />
                        <v-card-title>Burger King</v-card-title>
                        <v-card-text>
                          95 reviews <br />
                          Burgers, Fast Food, American (New)
                        </v-card-text>
                        <v-btn class="btn-top-rated rounded-0"> Get Direction</v-btn>
                        <v-card-text class="text-center">
                          <a href=""> Open </a> until 10:00 PM
                        </v-card-text>
                      </v-card>
                    </v-col>
                  </v-row>
                  <v-row class="business_items_block">
                    <v-col cols="6">
                      <v-card class="rounded-0 d-flex flex-row" width="610" height="300">
                        <div>
                          <img src="./../images/348s.jpg" height="300" width="300" />
                        </div>
                        <div>
                          <h3 class="title-catalog-item pl-5">International Smoke San Francisco</h3>
                          <v-card-subtitle>
                            <v-icon size="x-large">mdi-star-box</v-icon>
                            <v-icon size="x-large">mdi-star-box</v-icon>
                            <v-icon size="x-large">mdi-star-box</v-icon>
                            <v-icon size="x-large">mdi-star-box</v-icon>
                            <v-icon size="x-large">mdi-star-box</v-icon>
                            <span>1931</span>
                          </v-card-subtitle>
                          <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                            <v-chip class="mr-1"> Steakhouses </v-chip>
                            <v-chip class="mr-1"> Seafood </v-chip>
                            <v-chip class="mr-1"> Barbeque </v-chip>
                          </div>
                          <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                            <div class="price-type pl-2">Price type: $$</div>
                            <div class="street pl-3">Inner Richmond</div>
                          </div>
                          <div class="short-description">
                            <p class="text-justify pt-4 pl-3 pr-3 short-description-text">
                              International Smoke San Francisco is the wildly popular
                            </p>
                          </div>
                          <div class="short-feature-list d-flex flex-row mx-auto pt-4 pl-2 pr-2">
                            <div class=" d-flex flex-row">
                                <v-icon> mdi-check</v-icon>
                                <p class="text-subtitle-2">Outdoor seating</p>
                            </div>
                            <div class=" d-flex flex-row">
                                <v-icon> mdi-check</v-icon>
                                <p class="text-subtitle-2">Delivery</p>
                            </div>
                            <div class=" d-flex flex-row">
                                <v-icon> mdi-check</v-icon>
                                <p class="text-subtitle-2">Takeout</p>
                            </div>
                          </div>
                        </div>
                      </v-card>
                    </v-col>
                    <v-col cols="6">
                        <v-card class="rounded-0 d-flex flex-row" width="610" height="300">
                          <div>
                            <img src="./../images/348s.jpg" height="300" width="300" />
                          </div>
                          <div>
                            <h3 class="title-catalog-item pl-5">International Smoke San Francisco</h3>
                            <v-card-subtitle>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <span>1931</span>
                            </v-card-subtitle>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <v-chip class="mr-1"> Steakhouses </v-chip>
                              <v-chip class="mr-1"> Seafood </v-chip>
                              <v-chip class="mr-1"> Barbeque </v-chip>
                            </div>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <div class="price-type pl-2">Price type: $$</div>
                              <div class="street pl-3">Inner Richmond</div>
                            </div>
                            <div class="short-description">
                              <p class="text-justify pt-4 pl-3 pr-3 short-description-text">
                                International Smoke San Francisco is the wildly popular
                              </p>
                            </div>
                            <div class="short-feature-list d-flex flex-row mx-auto pt-4 pl-2 pr-2">
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Outdoor seating</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Delivery</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Takeout</p>
                              </div>
                            </div>
                          </div>
                        </v-card>
                      </v-col>
                      <v-col cols="6">
                        <v-card class="rounded-0 d-flex flex-row" width="610" height="300">
                          <div>
                            <img src="./../images/348s.jpg" height="300" width="300" />
                          </div>
                          <div>
                            <h3 class="title-catalog-item pl-5">International Smoke San Francisco</h3>
                            <v-card-subtitle>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <span>1931</span>
                            </v-card-subtitle>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <v-chip class="mr-1"> Steakhouses </v-chip>
                              <v-chip class="mr-1"> Seafood </v-chip>
                              <v-chip class="mr-1"> Barbeque </v-chip>
                            </div>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <div class="price-type pl-2">Price type: $$</div>
                              <div class="street pl-3">Inner Richmond</div>
                            </div>
                            <div class="short-description">
                              <p class="text-justify pt-4 pl-3 pr-3 short-description-text">
                                International Smoke San Francisco is the wildly popular
                              </p>
                            </div>
                            <div class="short-feature-list d-flex flex-row mx-auto pt-4 pl-2 pr-2">
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Outdoor seating</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Delivery</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Takeout</p>
                              </div>
                            </div>
                          </div>
                        </v-card>
                      </v-col>
                      <v-col cols="6">
                        <v-card class="rounded-0 d-flex flex-row" width="610" height="300">
                          <div>
                            <img src="./../images/348s.jpg" height="300" width="300" />
                          </div>
                          <div>
                            <h3 class="title-catalog-item pl-5">International Smoke San Francisco</h3>
                            <v-card-subtitle>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <span>1931</span>
                            </v-card-subtitle>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <v-chip class="mr-1"> Steakhouses </v-chip>
                              <v-chip class="mr-1"> Seafood </v-chip>
                              <v-chip class="mr-1"> Barbeque </v-chip>
                            </div>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <div class="price-type pl-2">Price type: $$</div>
                              <div class="street pl-3">Inner Richmond</div>
                            </div>
                            <div class="short-description">
                              <p class="text-justify pt-4 pl-3 pr-3 short-description-text">
                                International Smoke San Francisco is the wildly popular
                              </p>
                            </div>
                            <div class="short-feature-list d-flex flex-row mx-auto pt-4 pl-2 pr-2">
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Outdoor seating</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Delivery</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Takeout</p>
                              </div>
                            </div>
                          </div>
                        </v-card>
                      </v-col>
                      <v-col cols="6">
                        <v-card class="rounded-0 d-flex flex-row" width="610" height="300">
                          <div>
                            <img src="./../images/348s.jpg" height="300" width="300" />
                          </div>
                          <div>
                            <h3 class="title-catalog-item pl-5">International Smoke San Francisco</h3>
                            <v-card-subtitle>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <span>1931</span>
                            </v-card-subtitle>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <v-chip class="mr-1"> Steakhouses </v-chip>
                              <v-chip class="mr-1"> Seafood </v-chip>
                              <v-chip class="mr-1"> Barbeque </v-chip>
                            </div>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <div class="price-type pl-2">Price type: $$</div>
                              <div class="street pl-3">Inner Richmond</div>
                            </div>
                            <div class="short-description">
                              <p class="text-justify pt-4 pl-3 pr-3 short-description-text">
                                International Smoke San Francisco is the wildly popular
                              </p>
                            </div>
                            <div class="short-feature-list d-flex flex-row mx-auto pt-4 pl-2 pr-2">
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Outdoor seating</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Delivery</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Takeout</p>
                              </div>
                            </div>
                          </div>
                        </v-card>
                      </v-col>
                      <v-col cols="6">
                        <v-card class="rounded-0 d-flex flex-row" width="610" height="300">
                          <div>
                            <img src="./../images/348s.jpg" height="300" width="300" />
                          </div>
                          <div>
                            <h3 class="title-catalog-item pl-5">International Smoke San Francisco</h3>
                            <v-card-subtitle>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <v-icon size="x-large">mdi-star-box</v-icon>
                              <span>1931</span>
                            </v-card-subtitle>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <v-chip class="mr-1"> Steakhouses </v-chip>
                              <v-chip class="mr-1"> Seafood </v-chip>
                              <v-chip class="mr-1"> Barbeque </v-chip>
                            </div>
                            <div class="chip-list d-flex flex-row mx-auto pt-4 pl-2">
                              <div class="price-type pl-2">Price type: $$</div>
                              <div class="street pl-3">Inner Richmond</div>
                            </div>
                            <div class="short-description">
                              <p class="text-justify pt-4 pl-3 pr-3 short-description-text">
                                International Smoke San Francisco is the wildly popular
                              </p>
                            </div>
                            <div class="short-feature-list d-flex flex-row mx-auto pt-4 pl-2 pr-2">
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Outdoor seating</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Delivery</p>
                              </div>
                              <div class=" d-flex flex-row">
                                  <v-icon> mdi-check</v-icon>
                                  <p class="text-subtitle-2">Takeout</p>
                              </div>
                            </div>
                          </div>
                        </v-card>
                      </v-col>
                  </v-row>
                  <v-row class="pagination_block pt-5">
                    <v-col cols="6">
                        <v-pagination
                        v-model="page"
                        :length="4"
                        rounded="0"
                      ></v-pagination>
                    </v-col>
                    <v-col cols="6">
                       <p class="text-right">1 of 24</p>
                    </v-col>
                  </v-row>
                </v-col>
              </v-row>
        </v-col>
    </v-row>
</template>
<script>
import { reactive, ref } from "vue";

export default {
  setup() {
    const page = ref('1')
    const crumbs = reactive([
      {
        title: "Catalog",
        disabled: false,
        href: "breadcrumbs_dashboard",
      },
      {
        title: "Restaurants",
        disabled: false,
        href: "breadcrumbs_link_1",
      },
      {
        title: "Burgers",
        disabled: true,
        href: "breadcrumbs_link_2",
      },
    ]);
    const selectedSortOptions = ref(null);
    const sortOptions = ref(["Recomended", "Most Reviewed", "Most Rated"]);
    return {
      crumbs,
      selectedSortOptions,
      sortOptions,
    };
  },
};
</script>

<style scoped>
.price-filter {
  font-size: 12px !important;
  height: 50px !important;
}

.suggested-filter,
.features-filter {
  font-size: 12px !important;
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

.catalog-card {
  height: 250px;
  width: 100%;
}

.catalog-card-img {
  height: 250px;
  width: 300px;
}

.btn-top-rated {
  width: 300px;
}

.title-catalog-item {
  word-wrap: break-word !important;
}

.short-description,
.short-description-text {
  word-wrap: break-word !important;
}
</style>
