export default {

    namespaced:true,

    state: {
        book: {},
        authors: []
    },

    mutations: {
        set(state, param) {
            state[param[0]] = param[1];
        }
    }

}
