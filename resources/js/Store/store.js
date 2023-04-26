import { createStore } from 'vuex'

// Create a new store instance.
const store = createStore({
    state () {
        return {
            request: []
        }
    },
    mutations: {
        initializeNewStore (state, request) {
            state.request.push(request);
        }
    }
})

export default store;
