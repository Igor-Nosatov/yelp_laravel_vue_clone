import { defineStore } from "pinia";
import businessDataService from "../../services/business/index";

export const useBusinessStore = defineStore("businessStore", {
    state: () => {
        return {
            businessById: {},
        };
    },
    getters: {},
    actions: {
        async storeNewBusiness(data){
            await businessDataService.createBusiness(data);
        },
        async updateCurrentBusiness(businessById){
            await businessDataService.updateBusiness(businessById);
        },
        async destroyByIdBusiness(id) {
            await businessDataService.deleteBusiness(id);
        },
    },
});
