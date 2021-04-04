<template>
  <div id="login-modal">
    <div class="modal-dialog modal-fullscreen">
      <h3>Login</h3>
      <p v-if="loading">Loading...</p>
      <p v-if="error" style="color: red">{{ error }}</p>
      <input type="text" placeholder="Username" v-model="user.username" /><br />
      <input type="text" placeholder="Password" v-model="user.password" /><br />
      <button @click="login">Login</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      user: {
        username: null,
        password: null,
      },
      loading: false,
      error: null,
    };
  },
  methods: {
    async login() {
      this.error = null;
      try {
        await this.$store.dispatch("login", this.user);
        // await this.$router.push({ user: "items" });
      } catch (err) {
        this.error = error;
      } finally {
        this.loading = false;
      }
    },
  },
};
</script>
