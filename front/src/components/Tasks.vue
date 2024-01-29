<script>
import axios from "axios";

export default {
  name: "Tasks",

  data() {
    return {
      tasks: [],
      newTaskText: "",
    };
  },
  methods: {
    addTask() {
      const params = {
        text: this.newTaskText,
      };

      const config = {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      };

      axios
        .post(
          "http://localhost/php-todo-list-json/back/addTask.php",
          params,
          config
        )
        .then((res) => {
          this.tasks = res.data;
        })
        .catch((err) => console.log(err));
    },
    toggleTask(i) {
      const params = {
        index: i,
      };

      const config = {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      };

      axios
        .post(
          "http://localhost/php-todo-list-json/back/toggleTask.php",
          params,
          config
        )
        .then((res) => {
          this.tasks = res.data;
        })
        .catch(err => console.log(err));
    },
  },
  mounted() {
    axios
      .get("http://localhost/php-todo-list-json/back/")
      .then((res) => {
        this.tasks = res.data;
      })
      .catch((err) => console.log(err));
  },
};
</script>

<template>
  <h1>Tasks</h1>
  <h3>New Task</h3>
  <form>
    <input type="text" v-model="newTaskText" />
    <input @click.prevent="addTask" type="submit" value="CREATE" />
  </form>
  <ul>
    <li
      v-for="(task, index) in tasks"
      :key="index"
      @click="toggleTask(index)"
      :class="task.stato ? 'done' : ''"
    >
      {{ task.testo }}
    </li>
  </ul>
</template>

<style scoped lang="scss">
.done {
  text-decoration: line-through;
}
</style>
