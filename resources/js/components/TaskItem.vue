<template>
    <div class="task-item">
        <h4>{{ task.title }}</h4>
        <p>{{ task.description }}</p>
        <small>{{ task.due_date }}</small>
        <div class="task-actions">
            <router-link :to="`/tasks/edit/${task.id}`" class="btn btn-warning"
                >Edit</router-link
            >
            <button @click="deleteTask(task.id)" class="btn btn-danger">
                Delete
            </button>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: {
        task: Object,
    },
    methods: {
        deleteTask(id) {
            if (confirm("Are you sure you want to delete this task?")) {
                axios
                    .delete(`/api/tasks/${id}`)
                    .then(() => {
                        this.$emit("task-deleted", id); // Emit event to parent to update task list
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            }
        },
    },
};
</script>

<style scoped>
/* Styles for task item */
</style>
