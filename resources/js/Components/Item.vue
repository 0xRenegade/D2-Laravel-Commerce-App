<template>
  <router-link :to="{ name: 'item', params: { id: item.id } }">
    <div
      @mouseenter="hoverFunc($event, true)"
      @mouseleave="hoverFunc($event, false)"
      class="item-container"
    >
      <div class="item-name">{{ item.name }}</div>
      <img :src="url() + item.image_url" alt="" class="item-image" />
      <div class="quantity">In Stock: {{ item.quantity }}</div>
      <div class="price">Price: ${{ item.price }}</div>
    </div>
  </router-link>
</template>

<script>
export default {
  name: "Item",
  props: {
    item: {
      type: Object,
      required: true,
    },
  },
  methods: {
    url: () => {
      const url = window.location.origin + "/";
      return url;
    },
    hoverFunc(event, hover) {
      if (hover) {
        event.currentTarget.style.transform = "translateY(-10px)";
      } else {
        event.currentTarget.style.transform = "translateY(0px)";
      }
    },
  },
};
</script>
