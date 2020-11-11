export default {

    namespaced:true,

    state: {
        books:[],
    },

    mutations: {
        set(state, param) {
            console.log(param);
            state[param[0]] = param[1];
        }
    }

}
