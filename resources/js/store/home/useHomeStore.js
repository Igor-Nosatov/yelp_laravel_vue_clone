import { defineStore } from "pinia";
import homeDataService from "./../../services/home/index";

export const useHomeStore = defineStore("homeStore", {
    state: () => {
        return {
            businessCatalogData:[],
        };
    },
    getters: {},
    actions: {
        async fetchAllBusinessCatalogData() {
            this.businessCatalogData = await homeDataService.fetchBusinessCatalogData();
        },
    },
});
