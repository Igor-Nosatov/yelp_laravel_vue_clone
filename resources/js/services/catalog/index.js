import requestService from "../requestService.js";

const apiEndpointCatalog = "/catalog";
const apiEndpointFilters = "/filters";

const catalogDataService = {
    async fetchBusinessCatalogData() {
        const response = await requestService.get(apiEndpointCatalog);
        return response?.data?.data;
    },
    async fetchCatalogFilters() {
        const response = await requestService.get(apiEndpointFilters);
        return response?.data?.data;
    },
    async fetchCatalogItemById(id){
        const response =  await requestService.get(apiEndpointCatalog+`${id}`);
        return response?.data?.data;
    }
};
export default catalogDataService;
