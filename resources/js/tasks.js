import Vue from 'vue';
import TasksList from "./components/TasksList";

document.querySelectorAll('.js-tasks-list').forEach(node => {
    new Vue({
        el: node,
        components: {
            TasksList
        }
    });
});
