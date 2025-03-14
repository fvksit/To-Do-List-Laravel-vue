<template>
    <div>
        <form @submit.prevent="login">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" v-model="email" required />
            </div>
            <div>
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    v-model="password"
                    required
                />
            </div>
            <button type="submit">Login</button>
        </form>
        <div v-if="errorMessage" class="error">{{ errorMessage }}</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: "",
            password: "",
            errorMessage: "",
        };
    },
    methods: {
        login() {
            this.$store
                .dispatch("login", {
                    email: this.email,
                    password: this.password,
                })
                .then(() => {
                    this.$router.push({ name: "dashboard" });
                })
                .catch((error) => {
                    this.errorMessage = "Invalid credentials";
                });
        },
    },
};
</script>

<style scoped>
.error {
    color: red;
}
</style>
