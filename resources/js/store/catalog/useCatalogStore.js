import { defineStore } from "pinia";
import catalogDataService from "../../services/catalog/index";

export const useCatalogStore = defineStore("catalogStore", {
    state: () => {
        return {
            catalogData:[],
            catalogFiltersData:[],
        };
    },
    getters: {},
    actions: {
        async fetchAllBusinessCatalogData() {
            this.catalogData = await catalogDataService.fetchBusinessCatalogData();
        },
        async fetchCatalogDataFilters() {
            this.catalogFiltersData = await catalogDataService.fetchCatalogFilters();
        },
    },
});
