import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

import authorList from "./authorList";
import authorDetail from './authorDetail';
import bookDetail from "./bookDetail";
import bookList from "./bookList";


export default new Vuex.Store({
    modules: {
        authorList,
        authorDetail,
        bookList,
        bookDetail
    }
});
