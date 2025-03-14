<template>
    <div>
        <h2>Welcome to the Dashboard</h2>
        <p>Hello, {{ user.name }}</p>
        <button @click="logout">Logout</button>
    </div>
</template>

<script>
export default {
    computed: {
        user() {
            return this.$store.state.user;
        },
    },
    methods: {
        logout() {
            this.$store.dispatch("logout");
            this.$router.push({ name: "login" });
        },
    },
};
</script>
