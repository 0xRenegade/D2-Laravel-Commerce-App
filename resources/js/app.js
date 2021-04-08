require("./preload");

import { createApp } from "vue";
import router from "./Router/router";
import store from "./Store/index";
import App from "./App.vue";

const app = createApp(App);
app.use(router);
app.use(store);
app.mount("#app");
