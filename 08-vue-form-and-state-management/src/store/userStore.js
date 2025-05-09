// Only if you're using Pinia
import { defineStore } from 'pinia';

export const useUserStore = defineStore('user', {
    state: () => ({
        firstName: '',
        lastName: ''
    }),
    getters: {
        fullName: (state) => `${state.firstName} ${state.lastName}`
    }
});
