<template>
    <div>
        <h1>{{ isEdit ? "Edit" : "Create" }} Task</h1>
        <TaskForm :isEdit="isEdit" :taskId="taskId" />
    </div>
</template>

<script>
import TaskForm from "../components/TaskForm.vue";

export default {
    components: {
        TaskForm,
    },
    data() {
        return {
            isEdit: false,
            taskId: null,
        };
    },
    mounted() {
        const taskId = this.$route.params.id;
        if (taskId) {
            this.isEdit = true;
            this.taskId = taskId;
        }
    },
};
</script>
