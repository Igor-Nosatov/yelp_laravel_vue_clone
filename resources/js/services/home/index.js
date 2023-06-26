import requestService from "../requestService.js";
const apiEndpoint = "/home";

const homeDataService = {
    async fetchBusinessCatalogData() {
        const response = await requestService.get(apiEndpoint);
        return response?.data?.data;
    },
};
export default homeDataService;
