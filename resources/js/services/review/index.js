import requestService from "../requestService.js";
const apiEndpoint = "/review";

const reviewDataService = {
    async fetchReviewById(id) {
        const response = await requestService.get(apiEndpoint + `/` + id);
        return response?.data?.data;
    },
    async createReview(review) {
        const response = await requestService.post(apiEndpoint, review);
        return response?.data?.data;
    },
    async updateReview(review) {
        const response = await requestService.put(
            apiEndpoint + `/` + review.id,
            review
        );
        return response?.data?.data;
    },
    async deleteReview(id) {
        const response = await requestService.delete(apiEndpoint + `/` + id);
        return response;
    },
};
export default reviewDataService;
