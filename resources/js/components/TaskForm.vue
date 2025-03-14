<template>
    <div>
        <h1>{{ isEdit ? "Edit" : "Create" }} Task</h1>
        <form @submit.prevent="submitForm">
            <div class="form-group">
                <label for="title">Title</label>
                <input
                    type="text"
                    v-model="task.title"
                    class="form-control"
                    id="title"
                    required
                />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea
                    v-model="task.description"
                    class="form-control"
                    id="description"
                ></textarea>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input
                    type="date"
                    v-model="task.due_date"
                    class="form-control"
                    id="due_date"
                    required
                />
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select
                    v-model="task.status"
                    class="form-control"
                    id="status"
                    required
                >
                    <option value="belum selesai">Not Completed</option>
                    <option value="selesai">Completed</option>
                    <option value="ditunda">Pending</option>
                </select>
            </div>
            <div class="form-group">
                <label for="priority">Priority</label>
                <select
                    v-model="task.priority"
                    class="form-control"
                    id="priority"
                    required
                >
                    <option value="rendah">Low</option>
                    <option value="sedang">Medium</option>
                    <option value="tinggi">High</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">
                {{ isEdit ? "Update" : "Create" }}
            </button>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: {
        isEdit: {
            type: Boolean,
            default: false,
        },
        taskId: {
            type: String,
            default: null,
        },
    },
    data() {
        return {
            task: {
                title: "",
                description: "",
                due_date: "",
                status: "belum selesai",
                priority: "rendah",
            },
        };
    },
    mounted() {
        if (this.isEdit && this.taskId) {
            this.fetchTask(this.taskId);
        }
    },
    methods: {
        fetchTask(id) {
            axios
                .get(`/api/tasks/${id}`)
                .then((response) => {
                    this.task = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        submitForm() {
            const apiCall = this.isEdit
                ? axios.put(`/api/tasks/${this.task.id}`, this.task)
                : axios.post("/api/tasks", this.task);

            apiCall
                .then((response) => {
                    this.$router.push("/tasks");
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>
