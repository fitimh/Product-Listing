import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";

import "bootstrap/dist/css/bootstrap.min.css";
import "../node_modules/bootstrap/dist/css/bootstrap.min.css";

const app = createApp(App);

app.config.globalProperties.$apiUrl = process.env.VUE_APP_BACKEND_URL;
app.use(store).use(router).mount("#app");
