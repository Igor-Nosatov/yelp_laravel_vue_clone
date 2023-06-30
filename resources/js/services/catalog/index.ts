import requestService from "../requestService.js";

interface CatalogResponse {
  data: any;
}

interface CatalogFiltersResponse {
  data: any;
}

const apiEndpointCatalog = "/catalog";
const apiEndpointFilters = "/filters";

const catalogDataService = {
  async fetchCatalog(): Promise<any> {
    try {
      const response: CatalogResponse = await requestService.get(apiEndpointCatalog);
      return response?.data?.data;
    } catch (error) {
      throw new Error("Failed to fetch catalog: " + error.message);
    }
  },

  async fetchCatalogFilters(): Promise<any> {
    try {
      const response: CatalogFiltersResponse = await requestService.get(apiEndpointFilters);
      return response?.data?.data;
    } catch (error) {
      throw new Error("Failed to fetch catalog filters: " + error.message);
    }
  },

  async fetchCatalogById(id: string): Promise<any> {
    try {
      const response: CatalogResponse = await requestService.get(
        `${apiEndpointCatalog}/${id}`
      );
      return response;
    } catch (error) {
      throw new Error("Failed to fetch catalog by ID: " + error.message);
    }
  },
};

export default catalogDataService;
