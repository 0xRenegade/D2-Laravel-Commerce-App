<template>
  <div id="login">
    <div
      class="item-container h-100 d-flex justify-content-center align-items-center"
    >
      <div class="login-wrapper">
        <div class="h1">Login:</div>
        <p v-if="loading">Loading...</p>
        <p v-if="error" style="color: red">{{ error }}</p>
        <input
          class="border-dark rounded-2 login-input"
          type="text"
          placeholder="Username"
          v-model="user.username"
        /><br />
        <input
          class="border-dark rounded-2 login-input"
          type="text"
          placeholder="Password"
          v-model="user.password"
        /><br />
        <button @click="login" class="btn btn-dark btn-login">Login</button>
      </div>
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
