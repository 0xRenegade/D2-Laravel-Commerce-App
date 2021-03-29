<template>
  <div class="container-fluid">
    <NavBar />
    <ProductGallery />
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
