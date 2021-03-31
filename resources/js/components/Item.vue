<template>
  <div
    @mouseover="hover = true"
    @mouseleave="hover = false"
    class="item-container"
  >
    <div class="item-name">{{ item.name }}</div>
    <img :src="url() + item.image_url" alt="" class="item-image" />
    <div class="quantity">In Stock: {{ item.quantity }}</div>
    <div class="price">Price: ${{ item.price }}</div>
  </div>
  <ItemHover
    v-if="hover"
    :type="item.type"
    :rarity="item.rarity"
    :max_sockets="item.max_sockets"
    :requirements="item.requirements"
    :durability="item.durability"
    :stats="item.stats"
    :set_bonuses="item.set_bonuses"
  />
</template>

<script>
import ItemHover from "./ItemHover";

export default {
  name: "Item",
  components: {
    ItemHover,
  },
  data() {
    return {
      hover: false,
    };
  },
  props: {
    item: {
      type: Object,
      required: true,
    },
  },
  methods: {
    url: () => {
      return window.location.href;
    },
  },
};
</script>
