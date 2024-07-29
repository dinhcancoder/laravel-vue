// store/index.js
import axios from 'axios';
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        token: null,
        user: null,
        permissions: []
    },
    mutations: {
        setToken(state, token) {
            state.token = token;
        },
        setUser(state, user) {
            state.user = user;
        },
        setPermissions(state, permissions) {
            state.permissions = permissions;
        }
    },
    actions: {
        async login({ commit }, credentials) {
            let response = await axios.post('/api/login', credentials);
            commit('setToken', response.data.token);
            axios.defaults.headers.common['Authorization'] = `Bearer ${response.data.token}`;
            let userResponse = await axios.get('/api/user');
            commit('setUser', userResponse.data);
            let permissionsResponse = await axios.get('/api/permissions');
            commit('setPermissions', permissionsResponse.data);
        }
    }
});
