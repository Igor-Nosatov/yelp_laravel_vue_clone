import { defineStore } from "pinia";
import eventDataService from "../../services/event/index";

export const useEventStore = defineStore("eventStore", {
    state: () => {
        return {
            eventData:[],
            eventById: {},
        };
    },
    getters: {},
    actions: {
        async fetchEventData() {
            this.eventData = await eventDataService.fetchAllEvents();
        },
        async fetchEventDataById(id) {
            this.eventById = await eventDataService.fetchEventById(id);
        },
        async storeNewReview(data){
            await eventDataService.createEvent(data);
        },
        async updateCurrentReview(eventById){
            await eventDataService.updateEvent(eventById);
        },
        async destroyByIdReview(id) {
            await eventDataService.deleteEvent(id);
        },
    },
});
