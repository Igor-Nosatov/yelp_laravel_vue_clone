import { defineStore } from "pinia";
import catalogDataService from "../../services/catalog/index";

export const useCatalogStore = defineStore("catalogStore", {
    state: () => {
        return {
            catalogData:[],
            catalogFiltersData:[],
            companyById: {},
        };
    },
    getters: {},
    actions: {
        async fetchAllBusinessCatalogData() {
            this.catalogData = await catalogDataService.fetchBusinessCatalogData();
        },
        async fetchAllBusinessCatalogDataById(id) {
            this.companyById = await catalogDataService.fetchCatalogItemById(id);
        },
        async fetchCatalogDataFilters() {
            this.catalogFiltersData = await catalogDataService.fetchCatalogFilters();
        },
    },
});
