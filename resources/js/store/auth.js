import { createStore } from 'vuex';

const store = createStore({
    state() {
        return {
            user: null,
            token: localStorage.getItem('token') || '',
        };
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
        },
        setToken(state, token) {
            state.token = token;
            localStorage.setItem('token', token);
        },
        logout(state) {
            state.user = null;
            state.token = '';
            localStorage.removeItem('token');
        }
    },
    actions: {
        login({ commit }, credentials) {
            // Kirim request ke backend untuk autentikasi
            return axios.post('/api/login', credentials)
                .then(response => {
                    commit('setToken', response.data.token);
                    return axios.get('/api/user', {
                        headers: {
                            Authorization: `Bearer ${response.data.token}`,
                        }
                    }).then(userResponse => {
                        commit('setUser', userResponse.data);
                    });
                });
        },
        logout({ commit }) {
            commit('logout');
        }
    },
    getters: {
        isAuthenticated(state) {
            return !!state.token;
        },
        user(state) {
            return state.user;
        }
    }
});

export default store;
