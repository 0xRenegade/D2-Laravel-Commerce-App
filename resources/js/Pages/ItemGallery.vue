<template>
  <div class="container">
    <h1 class="site-title">Item Gallery</h1>
    <hr />
    <div class="row mt-5">
      <div
        v-for="item in items"
        class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3"
        :key="item.id"
      >
        <Item :item="item" />
      </div>
    </div>
  </div>
</template>

<script>
import Item from "../Components/Item";

export default {
  components: {
    Item,
  },
  data() {
    return {
      items: [],
    };
  },
  mounted() {
    fetch(window.location.origin + "/api/item/all")
      .then((res) => res.json())
      .then((data) => (this.items = data))
      .catch((err) => console.log(err.message));
  },
};
</script>
