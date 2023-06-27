import requestService from "../requestService.js";
const apiEndpoint = "/account";

const accountDataService = {
    async fetchAccountById(id) {
        const response = await requestService.get(apiEndpoint + `/` + id);
        return response?.data?.data;
    },
    async createAccount(account) {
        const response = await requestService.post(apiEndpoint, account);
        return response?.data?.data;
    },
    async updateAccount(account) {
        const response = await requestService.put(
            apiEndpoint + `/` + account.id,
            account
        );
        return response?.data?.data;
    },
};
export default  accountDataService;
