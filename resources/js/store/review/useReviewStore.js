import { defineStore } from "pinia";
import reviewDataService from "../../services/review/index";

export const useReviewStore = defineStore("reviewStore", {
    state: () => {
        return {
            reviewById: {},
        };
    },
    getters: {},
    actions: {
        async fetchReviewDataById(id) {
            this.reviewById = await reviewDataService.fetchReviewById(id);
        },
        async storeNewReview(data){
            await reviewDataService.createReview(data);
        },
        async updateCurrentReview(reviewById){
            await reviewDataService.updateReview(reviewById);
        },
        async destroyByIdReview(id) {
            await reviewDataService.deleteReview(id);
        },
    },
});
