<template>
  <div id="item-container">
    <div class="item-name">{{ name }}</div>
    <div class="item-type">{{ type }}</div>
    <div class="item-rarity">{{ rarity }}</div>
    <img
      src="{{ window.location.href + image_url }}"
      alt=""
      class="item-image"
    />
    <div class="item-sockets">{{ max_sockets }}</div>
    <div class="item-requirements">{{ requirements }}</div>
    <div class="item-durability">{{ durability }}</div>
    <div class="item-stats">{{ stats }}</div>
    <div class="item-set-bonuses">{{ set_bonuses }}</div>
    <div class="quantity">{{ quantity }}</div>
    <div class="price">{{ price }}</div>
  </div>
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      required: true,
    },
    type: {
      type: String,
      required: true,
    },
    rarity: {
      type: String,
      required: true,
    },
    ethereal: {
      type: Boolean,
      required: true,
    },

    max_sockets: {
      type: Number,
      required: false,
    },
    requirements: {
      type: Array,
      required: false,
    },
    durability: {
      type: String,
      required: true,
    },
    stats: {
      type: Array,
      required: true,
    },
    set_bonuses: {
      type: Array,
      required: false,
    },
    quantity: {
      type: Number,
      required: true,
    },
    price: {
      type: Number,
      required: true,
    },
    image_url: {
      type: String,
      required: true,
    },
  },
};
</script>
