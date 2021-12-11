require("./bootstrap");
import { createApp } from "vue";
import router from "./router";
import BootstrapVue3 from "bootstrap-vue-3";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue-3/dist/bootstrap-vue-3.css";

import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init()
const app = createApp({});

app.component("register-views", require("SrcComponent/views/Register.vue").default);
app.component("login-views", require("SrcComponent/views/Login.vue").default);
app.component("Header-views", require("SrcComponent/components/Header.vue").default);
app.component("Footer-views", require("SrcComponent/components/Footer.vue").default);
app.component("home-views", require("SrcComponent/views/Home.vue").default);
app.component("edit-views", require("SrcComponent/views/EditUser.vue").default);
app.component("cars-home", require("SrcComponent/views/Cars/CarsHome.vue").default);
app.component("page-innovation", require("SrcComponent/views/Pages/Innovation/Innovation.vue").default);
app.component("page-design", require("SrcComponent/views/Pages/Design/Design.vue").default);
app.component("page-events", require("SrcComponent/views/Pages/Events/Events.vue").default);
app.component("page-museums_history", require("SrcComponent/views/Pages/Museums_History/Museums_History.vue").default);
app.component("page-company",require("../js/views/Pages/Company/Company.vue").default);
//Admin
app.component("admin-innovation", require("SrcComponent/Components/Admin/Layouts/Innovation/Innovation.vue").default);
app.component("admin-slides", require("./components/Admin/Layouts/Slides/ListSlides.vue").default);

app.component("admin-slides-add", require("./components/Admin/Layouts/Slides/AddSlides.vue").default);//Add Slides

app.component("admin-slides-update-views", require("./components/Admin/Layouts/Slides/UpdateSlides.vue").default);

app.use(router);
app.use(BootstrapVue3);
app.mount("#app");
app.mount('#wrapper');
AOS.init()

export default app;
