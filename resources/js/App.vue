<template>
  <div class="container-fluid">
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
