<template>
  <div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="logo" src="/images/logo.png" alt="Logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navBar__link navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <router-link class="nav-link" :to="{ name: 'home' }"
                >Home</router-link
              >
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="{ name: 'items' }"
                >Items</router-link
              >
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <form class="d-flex">
              <router-link
                class="btn btn-dark btn-login"
                :to="{ name: 'login' }"
                >Login</router-link
              >
            </form>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "NavBar",
  components: {},
  data() {
    return {
      show: false,
    };
  },
};
</script>
