<template>
  <v-row justify="center" class="mt-10">
    <v-col cols="10" align-self="center">
      <v-row>
        <v-col cols="2">
          <h3 class="font-weight-bold pt-16">Filters</h3>
          <br />
          <v-expansion-panels v-model="price_panel">
            <v-expansion-panel>
              <v-expansion-panel-title
                ><h4 class="font-weight-bold">
                  Price Level
                </h4></v-expansion-panel-title
              >
              <v-expansion-panel-text>
                <div class="d-flex flex-column">
                  <div class="pb-4">
                    <v-checkbox
                      :label="item"
                      class="suggested-filter"
                      v-for="item in catalogFiltersData.price"
                      :key="item"
                    ></v-checkbox>
                  </div>
                </div>
              </v-expansion-panel-text>
            </v-expansion-panel>
          </v-expansion-panels>
          <v-divider></v-divider>
          <br />
          <v-expansion-panels v-model="suggest_panel">
            <v-expansion-panel>
              <v-expansion-panel-title
                ><h4 class="font-weight-bold">
                    Suggested
                </h4></v-expansion-panel-title
              >
              <v-expansion-panel-text>
                <div class="d-flex flex-column">
                  <div class="pb-4">
                    <v-checkbox
                      :label="item.name"
                      class="suggested-filter"
                      v-for="item in catalogFiltersData.suggest"
                      :key="item.id"
                    ></v-checkbox>
                  </div>
                </div>
              </v-expansion-panel-text>
            </v-expansion-panel>
          </v-expansion-panels>
          <v-divider></v-divider>
          <br/>
          <v-expansion-panels v-model="category_panel">
            <v-expansion-panel>
              <v-expansion-panel-title
                ><h4 class="font-weight-bold">
                    Category
                </h4></v-expansion-panel-title
              >
              <v-expansion-panel-text>
                <div class="d-flex flex-column">
                  <div class="pb-4">
                    <v-checkbox
                      :label="item.name"
                      class="suggested-filter"
                      v-for="item in catalogFiltersData.category"
                      :key="item.id"
                    ></v-checkbox>
                  </div>
                </div>
              </v-expansion-panel-text>
            </v-expansion-panel>
          </v-expansion-panels>
          <v-divider></v-divider>
          <br/>
          <v-expansion-panels v-model="feature_panel">
            <v-expansion-panel>
              <v-expansion-panel-title
                ><h4 class="font-weight-bold">
                    Features
                </h4></v-expansion-panel-title
              >
              <v-expansion-panel-text>
                <div class="d-flex flex-column">
                  <div class="pb-4">
                    <v-checkbox
                      :label="item.name"
                      class="suggested-filter"
                      v-for="item in catalogFiltersData.features"
                      :key="item.id"
                    ></v-checkbox>
                  </div>
                </div>
              </v-expansion-panel-text>
            </v-expansion-panel>
          </v-expansion-panels>
          <v-divider></v-divider>
          <br/>
          <v-expansion-panels v-model="amenity_panel">
            <v-expansion-panel>
              <v-expansion-panel-title
                ><h4 class="font-weight-bold">
                   Amenity
                </h4></v-expansion-panel-title
              >
              <v-expansion-panel-text>
                <div class="d-flex flex-column">
                  <div class="pb-4">
                    <v-checkbox
                      :label="item.name"
                      class="suggested-filter"
                      v-for="item in catalogFiltersData.amenities"
                      :key="item.id"
                    ></v-checkbox>
                  </div>
                </div>
              </v-expansion-panel-text>
            </v-expansion-panel>
          </v-expansion-panels>
          <v-divider></v-divider>
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
                  >Sorts non-Sponsored Results based <br />on factors like
                  search terms, <br />distance, and ratings.</v-tooltip
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
            <CatalogCard
              :cardData="item"
              v-for="item in catalogData"
              :key="item.id"
            />
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
import { reactive, ref, onMounted } from "vue";
import { storeToRefs } from "pinia";
import CatalogCard from "@/components/catalog_components/CatalogCard.vue";
import {useCatalogStore} from "../store/catalog/useCatalogStore";

export default {
  components: {
    CatalogCard,
  },
  setup() {
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

    //filters v-models arrays
    const price_panel = ref([0]);
    const suggest_panel = ref([0]);
    const category_panel = ref([]);
    const feature_panel = ref([]);
    const amenity_panel = ref([]);

    //get store data
    const { catalogData,catalogFiltersData } = storeToRefs(useCatalogStore());
    const { fetchAllBusinessCatalogData,fetchCatalogDataFilters } = useCatalogStore();

    onMounted(async () => {
      try {
        fetchAllBusinessCatalogData();
        fetchCatalogDataFilters();
      } catch (error) {
        console.error(error);
      }
    });

    return {
      crumbs,
      selectedSortOptions,
      sortOptions,
      catalogData,
      catalogFiltersData,
      price_panel,
      suggest_panel,
      category_panel,
      feature_panel,
      amenity_panel,
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



