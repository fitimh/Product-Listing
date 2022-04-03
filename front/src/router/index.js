import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import About from "@/views/About.vue";
import Register from "@/views/Register";
import Login from "@/views/Login";
import Dashboard from "@/views/Dashboard"
import Profile from "@/views/Profile"

const routes = [
  { path: "/",name: "Home",component: Home,},
  { path: "/about",name: "About",component: About,},
  { path: "/register",name: "Register",component: Register,},
  { path: "/login",name: "login",component: Login,},
  { path: "/dashboard", name: "dashboard", component: Dashboard,},
  { path: "/profile", name: "profile", component: Profile },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;

