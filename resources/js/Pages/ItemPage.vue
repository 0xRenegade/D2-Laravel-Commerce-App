<template>
  <div class="container d-flex align-items-center justify-content-center mt-5">
    <div class="item-container w-100 h-100 mb-5">
      <div class="row">
        <div
          class="d-flex align-items-center justify-content-center col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"
        >
          <div class="item-left">
            <div class="h3 mt-5">{{ item.name }}</div>
            <img :src="url() + item.image_url" alt="" />
            <div class="h3">In Stock: {{ item.quantity }}</div>
            <div class="h3">Price: {{ item.price }}</div>
            <button type="button" class="btn btn-dark btn-login mt-3 mb-5">
              <i class="fas fa-cart-plus"></i> Add To Cart
            </button>
          </div>
        </div>
        <div
          class="d-flex align-items-center justify-content-center col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5"
        >
          <div class="item-right">
            <div class="h3 mt-5">Stats:</div>
            <div class="item-type mt-5">Type: {{ item.type }}</div>
            <div class="item-rarity">Rarity: {{ item.rarity }}</div>
            <div class="item-sockets">Max Sockets: {{ item.max_sockets }}</div>
            <div
              v-for="(requirement, i) in item.requirements"
              class="item-requirements"
              :key="i"
            >
              <div class="requirement">Requirements: {{ requirement }}</div>
            </div>
            <div class="item-durability">Durability: {{ item.durability }}</div>
            <div>Affixes:</div>
            <div v-for="(stat, i) in item.stats" class="item-stats" :key="i">
              <div class="stat">{{ stat }}</div>
            </div>
            <div
              v-if="
                typeof item.set_bonuses !== 'undefined' &&
                item.set_bonuses.length !== 0
              "
            >
              <div>Set Bonuses:</div>
              <div
                v-for="(set_bonus, i) in item.set_bonuses"
                class="item-set-bonuses"
                :key="i"
              >
                <div class="set-bonus">{{ set_bonus }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "item",
  props: {
    id: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      item: {},
    };
  },
  async mounted() {
    await fetch(window.location.origin + "/api/item/" + this.id)
      .then((res) => res.json())
      .then((data) => (this.item = data))
      .catch((err) => console.log(err.messages));
  },
  methods: {
    url: () => {
      const url = window.location.origin + "/";
      return url;
    },
  },
};
</script>
