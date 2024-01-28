<script>
import axios from "axios";

export default{
  mounted(){
    axios.get("http://localhost/php-todo-list-json/back/")
    .then(res =>{
      console.log("razze", res.data);
    });
  }
}
</script>

<template>
  <h1>Le razze di Cani :D</h1>
</template>

<style scoped></style>
