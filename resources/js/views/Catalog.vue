<template>
  <v-row justify="center" class="mt-10">
    <v-col cols="10" align-self="center">
      <v-row>
        <v-col cols="2">
          <h3 class="font-weight-bold">Filters</h3>
          <div class="d-flex flex-row">
            <v-checkbox
              class="price-filter"
              v-for="item in priceFilterValues"
              :key="item.id"
              >{{ item.price_level }}</v-checkbox
            >
          </div>
          <v-divider></v-divider>
          <h4 class="font-weight-bold pt-4">Suggested</h4>
          <div class="pb-4">
            <v-checkbox
              :label="item.name"
              class="suggested-filter"
              v-for="item in filters.suggest"
              :key="item.id"
            ></v-checkbox>
          </div>
          <v-divider></v-divider>
          <h4 class="font-weight-bold pt-4">Category</h4>
          <div class="d-flex flex-row flex-wrap">
            <span v-for="item in filters.category" :key="item.id">
              <input type="checkbox" :id="item.id" />
              <label :for="item.id">{{ item.name }}</label>
            </span>
          </div>
          <v-divider></v-divider>
          <h4 class="font-weight-bold pt-4">Features</h4>
          <div class="pb-4">
            <v-checkbox
            :label="item.name"
            class="suggested-filter"
            v-for="item in filters.features"
            :key="item.id"
          ></v-checkbox>

          </div>
          <v-divider></v-divider>
          <h4 class="font-weight-bold pt-4">Neighborhoods</h4>
          <div class="pb-4">
            <v-checkbox
              label="Alamo Square"
              class="features-filter"
            ></v-checkbox>
            <v-checkbox label="Anza Vista" class="features-filter"></v-checkbox>
            <v-checkbox
              label="Ashbury Heights"
              class="features-filter"
            ></v-checkbox>
            <v-checkbox
              label="Balboa Terrace"
              class="features-filter"
            ></v-checkbox>
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
          <v-row class="business_items_block" >
            <CatalogCard :cardData="item"  v-for="item in catalogItems" :key="item.id"/>
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
import axios from "axios";
import CatalogCard  from "@/components/catalog_components/CatalogCard.vue";

export default {
    components: {
        CatalogCard,
    },
  setup() {
    const priceFilterValues = ref([
      {
        id: 1,
        price_level: "$",
      },
      {
        id: 2,
        price_level: "$$",
      },
      {
        id: 3,
        price_level: "$$$",
      },
      {
        id: 4,
        price_level: "$$$$",
      },
    ]);
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
    const filters = ref([]);
    const catalogItems = ref([]);

    const fetchFilterData = () => {
        axios.get('http://localhost:8000/api/v1/filters')
        .then(response => {
            filters.value = response.data.data;
        })
        .catch(error => {
            console.error(error);
        });
    }

    const fetchCatalogItemData = () => {
        axios.get('http://localhost:8000/api/v1/catalog')
        .then(response => {
            catalogItems.value = response.data.data;
        })
        .catch(error => {
            console.error(error);
        });
    }

    onMounted(async () => {
      try {
        fetchFilterData();
        fetchCatalogItemData();
      } catch (error) {
        console.error(error);
      }
    });

    return {
      crumbs,
      selectedSortOptions,
      sortOptions,
      priceFilterValues,
      filters,
      catalogItems,
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
