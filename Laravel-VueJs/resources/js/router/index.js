
import { createWebHistory, createRouter } from "vue-router";
import Register from "../views/Register.vue";
import Login from "../views/Login.vue";
import Home from "../views/Home.vue";
import EditUser from "../views/EditUser.vue";
import CarsHome from "../views/Cars/CarsHome.vue";
const routes = [
    {
        /* Tạo routes trong vuejs */
        name: "regsiter",
        path: "/register",
        component: Register,
    },
    {
        //tạo router /login
        name: "login",
        path: "/login",
        component: Login,
    },
    {
        name : "home",
        path : "/home",
        component : Home
    },
     {
        name : "edit",
        path : "/edit/:id",
        component : EditUser
    },
    {
        name : "home-page",
        path : "/car-home",
        component : CarsHome
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
