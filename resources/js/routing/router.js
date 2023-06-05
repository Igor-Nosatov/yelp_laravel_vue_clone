import {
    createRouter,
    createWebHistory,
} from "vue-router/dist/vue-router.esm-bundler";
import Home from "../views/Home.vue";
import SignUp from "../views/SignUp.vue";
import Login from "../views/Login.vue";
import Catalog from "../views/BusinessCatalog.vue";
import CatalogItem from "../views/BusinessCatalogItem.vue";
import Review from "../views/Review.vue";
import Profile from "../views/Account/Profile.vue";
import Password from "../views/Account/Password.vue";
import SocialNetworks from "../views/Account/SocialNetworks.vue";
import CreateFormBusiness from "../views/CreateFormBusiness.vue";
import Blog from "../views/Blog.vue";
import BlogItem from "../views/BlogItem.vue";
import Notifications from "../views/Account/Notifications.vue";
import PrivacySettings from "../views/Account/PrivacySettings.vue";

export default () =>
    createRouter({
        history: createWebHistory(),
        routes: [
            {
                path: "/",
                name: "home",
                component: Home,
            },
            {
                path: "/signup",
                name: "signup",
                component: SignUp,
            },
            {
                path: "/login",
                name: "login",
                component: Login,
            },
            {
                path: "/catalog",
                name: "catalog",
                component: Catalog,
            },
            {
                path: "/catalog/:id",
                name: "catalog-item",
                component: CatalogItem,
            },
            {
                path: "/review",
                name: "review",
                component: Review,
            },
            {
                path: "/profile",
                name: "profile",
                component: Profile,
            },
            {
                path: "/password",
                name: "password",
                component: Password,
            },
            {
                path: "/social-networks",
                name: "socialNetworks",
                component:  SocialNetworks,
            },
            {
                path: "/notifications",
                name: "notifications",
                component:Notifications
            },
            {
                path: "/privacy-settings",
                name: "privacySettings",
                component:  PrivacySettings,
            },
            {
                path: "/create-business",
                name: "create-business",
                component: CreateFormBusiness ,
            },
            {
                path: "/news",
                name: "news",
                component: Blog ,
            },
            {
                path: "/news/:id",
                name: "news-item",
                component: BlogItem ,
            },
        ],
    });

