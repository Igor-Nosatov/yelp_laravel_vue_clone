import { defineStore } from "pinia";
import accountDataService from "../../services/account/index";

export const useAccountStore = defineStore("accountStore", {
    state: () => {
        return {
            accountById: {},
        };
    },
    getters: {},
    actions: {
        async fetchAccountDataById(id) {
            this.accountById = await accountDataService.fetchAccountById(id);
        },
        async storeNewAccount(data){
            await accountDataService.createAccount(data);
        },
        async updateCurrentAccount(accountById){
            await accountDataService.updateAccount(accountById);
        },
    },
});
