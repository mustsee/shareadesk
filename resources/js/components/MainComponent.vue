<template>
 <div class="main"></div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>

<style lang="scss" scoped>

.main {
  background-color: cadetblue;
  height: calc(100vh - 60px);
}
html,
body {
  color: #636b6f;
  font-family: "Nunito", sans-serif;
  font-weight: 200;
  height: 100vh;
  margin: 0;
}

.full-height {
  height: 100vh;
}
</style>

