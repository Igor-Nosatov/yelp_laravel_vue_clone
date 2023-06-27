import requestService from "../requestService.js";
const apiEndpoint = "/business";

const businessDataService = {
    async createBusiness(business) {
        const response = await requestService.post(apiEndpoint, business);
        return response?.data?.data;
    },
    async updateBusiness(business) {
        const response = await requestService.put(
            apiEndpoint + `/` + business.id,
            business
        );
        return response?.data?.data;
    },

    async deleteBusiness(id) {
        const response = await requestService.delete(apiEndpoint + `/` + id);
        return response;
    },
};
export default businessDataService;
