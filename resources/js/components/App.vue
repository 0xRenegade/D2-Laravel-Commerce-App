<template>
  <div class="container-fluid">
    <NavBar />
    <!-- <Main /> -->
  </div>
</template>

<script>
import NavBar from "./NavBar";
// import Main from "./Main";

export default {
  components: {
    NavBar,
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
