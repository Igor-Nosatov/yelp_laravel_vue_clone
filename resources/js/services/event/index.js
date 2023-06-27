import requestService from "../requestService.js";
const apiEndpoint = "/event";

const eventDataService = {
    async fetchAllEvents() {
        const response = await requestService.get(apiEndpoint);
        return response?.data?.data;
    },

    async fetchEventById(id) {
        const response = await requestService.get(apiEndpoint + `/` + id);
        return response?.data?.data;
    },
    async createEvent(event) {
        const response = await requestService.post(apiEndpoint, event);
        return response?.data?.data;
    },
    async updateEvent(event) {
        const response = await requestService.put(
            apiEndpoint + `/` + event.id,
            event
        );
        return response?.data?.data;
    },

    async deleteEvent(id) {
        const response = await requestService.delete(apiEndpoint + `/` + id);
        return response;
    },
};
export default eventDataService;
