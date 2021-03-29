<template>
  <div class="container-fluid">
    <NavBar />
    <ItemGallery />
  </div>
</template>

<script>
import NavBar from "./NavBar";
import ItemGallery from "./ItemGallery";
const baseUrl = window.location.href;

export default {
  components: {
    NavBar,
    ItemGallery,
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
