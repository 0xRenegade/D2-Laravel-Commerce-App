<template>
  <div class="container-fluid h-100">
    <NavBar />
    <router-view></router-view>
  </div>
</template>

<script>
import NavBar from "./Components/NavBar";

export default {
  components: {
    NavBar,
  },
};
</script>
