import { defineStore } from "pinia";
import catalogDataService from "../../services/catalog/index";

interface CatalogItem {
  // Define the type for a single catalog item
  // Example: { id: number, name: string, ... }
}

interface CatalogStoreState {
  catalogData: CatalogItem[];
  catalogFiltersData: any[]; // Define the appropriate type for catalog filters data
  catalogById: CatalogItem;
}

export const useCatalogStore = defineStore("catalogStore", {
  state: (): CatalogStoreState => {
    return {
      catalogData: [],
      catalogFiltersData: [],
      catalogById: {},
    };
  },
  getters: {},
  actions: {
    async fetchCatalog(): Promise<void> {
      try {
        this.catalogData = await catalogDataService.fetchCatalog();
      } catch (error) {
        console.error("Failed to fetch catalog:", error);
      }
    },
    async fetchCatalogById(id: number): Promise<void> {
      try {
        this.catalogById = await catalogDataService.fetchCatalogById(id);
      } catch (error) {
        console.error("Failed to fetch catalog by ID:", error);
      }
    },
    async fetchCatalogDataFilters(): Promise<void> {
      try {
        this.catalogFiltersData = await catalogDataService.fetchCatalogFilters();
      } catch (error) {
        console.error("Failed to fetch catalog filters:", error);
      }
    },
  },
});
