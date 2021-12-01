
import { createWebHistory, createRouter } from "vue-router";
import Register from "SrcComponent/views/Register.vue";
import Login from "SrcComponent/views/Login.vue";
import Home from "SrcComponent/views/Home.vue";
import EditUser from "SrcComponent/views/EditUser.vue";
import CarsHome from "SrcComponent/views/Cars/CarsHome.vue";
import Innovation from "SrcComponent/views/Pages/Innovation/Innovation.vue";
import MuseumsHistory from "../views/Pages/Museums_History/Museums_History.vue"
import Company from "../views/Pages/Company/Company.vue"
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
        path : "/cars-home",
        component : CarsHome
    },
     {
        name : "innovation",
        path : "/innovation",
        component : Innovation,
    },
     {
        name : "company",
        path : "/company",
        component : Company
    },
    {
        name : "design",
        path : "/design",
        // component : Innovation
    },
    {
        name : "museums-history",
        path : "/museums-history",
        component : MuseumsHistory,
    },
    {
        name : "events",
        path : "/events",
        // component : Innovation
    },
    {
        name : "lifestyle",
        path : "/lifestyle",
        // component : Innovation
    },

];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
    linkActiveClass: 'active',
});

export default router;
