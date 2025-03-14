<template>
    <div>
        <h1>Task List</h1>
        <router-link to="/tasks/create" class="btn btn-primary mb-3"
            >Create New Task</router-link
        >
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Priority</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="task in tasks" :key="task.id">
                    <td>{{ task.title }}</td>
                    <td>{{ task.description }}</td>
                    <td>{{ task.due_date }}</td>
                    <td>{{ task.status }}</td>
                    <td>{{ task.priority }}</td>
                    <td>
                        <router-link
                            :to="`/tasks/edit/${task.id}`"
                            class="btn btn-warning"
                            >Edit</router-link
                        >
                        <button
                            @click="deleteTask(task.id)"
                            class="btn btn-danger"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            tasks: [],
        };
    },
    mounted() {
        this.fetchTasks();
    },
    methods: {
        fetchTasks() {
            axios
                .get("/api/tasks")
                .then((response) => {
                    this.tasks = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        deleteTask(id) {
            if (confirm("Are you sure you want to delete this task?")) {
                axios
                    .delete(`/api/tasks/${id}`)
                    .then(() => {
                        this.fetchTasks(); // Refresh the list after deletion
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            }
        },
    },
};
</script>
