<template>
  <div class="hover-container">
    <div class="item-type">Type: {{ type }}</div>
    <div class="item-rarity">Rarity: {{ rarity }}</div>
    <div class="item-sockets">Max Sockets: {{ max_sockets }}</div>
    <div
      v-for="(requirement, i) in requirements"
      class="item-requirements"
      :key="i"
    >
      <div class="requirement">Requirements: {{ requirement }}</div>
    </div>
    <div class="item-durability">Durability: {{ durability }}</div>
    <div v-for="(stat, i) in stats" class="item-stats" :key="i">
      <div class="stat">Stats: {{ stat }}</div>
    </div>
    <div v-if="set_bonuses[0] !== 'none'">
      <div
        v-for="(set_bonus, i) in item.set_bonuses"
        class="item-set-bonuses"
        :key="i"
      >
        <div class="set-bonus">Set Bonuses: {{ set_bonus }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Item Hover",
  props: {
    type: {
      type: String,
      required: true,
    },
    rarity: {
      type: String,
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
  },
};
</script>
