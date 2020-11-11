export default {

    namespaced:true,

    state: {
        authors:[],
    },

    mutations: {
        set(state, param) {
            state[param[0]] = param[1];
        }
    }

}
