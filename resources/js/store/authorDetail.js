export default {

    namespaced:true,

    state: {
        msg:"",
        id:"",
        name:"",
        surname:""
    },

    mutations: {
        set(state, param) {
            state[param[0]] = param[1];
        }
    }

}
