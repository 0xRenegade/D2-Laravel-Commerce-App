// Router init
import { createRouter, createWebHistory } from "vue-router";
// Components
import Home from "../Pages/Home";
import ItemGallery from "../Pages/ItemGallery";
import Login from "../Pages/Login";

const history = createWebHistory();
const router = createRouter({
  history,
  routes: [
    {
      path: "/",
      component: Home,
      name: "home",
    },
    {
      path: "/items",
      component: ItemGallery,
      name: "items",
    },
    {
      path: "/login",
      component: Login,
      name: "login",
    },
  ],
});

export default router;
