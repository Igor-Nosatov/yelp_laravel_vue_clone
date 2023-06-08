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
import NotFound from "../views/NotFound.vue";

export default () =>
    createRouter({
        history: createWebHistory(),
        routes: [
            {
                path: "/",
                name: "home",
                component: Home,
                meta: { Header1: true },
            },
            {
                path: "/signup",
                name: "signup",
                component: SignUp,
                meta: { Header4: true },
            },
            {
                path: "/login",
                name: "login",
                component: Login,
                meta: { Header4: true },
            },
            {
                path: "/catalog",
                name: "catalog",
                component: Catalog,
                meta: { Header2: true },
            },
            {
                path: "/catalog/:id",
                name: "catalog-item",
                component: CatalogItem,
                meta: { Header2: true },
            },
            {
                path: "/review",
                name: "review",
                component: Review,
                meta: { Header3: true },
            },
            {
                path: "/profile",
                name: "profile",
                component: Profile,
                meta: { Header3: true },
            },
            {
                path: "/password",
                name: "password",
                component: Password,
                meta: { Header3: true },
            },
            {
                path: "/social-networks",
                name: "socialNetworks",
                component:  SocialNetworks,
                meta: { Header3: true },
            },
            {
                path: "/notifications",
                name: "notifications",
                component:Notifications,
                meta: { Header3: true },
            },
            {
                path: "/privacy-settings",
                name: "privacySettings",
                component:  PrivacySettings,
                meta: { Header3: true },
            },
            {
                path: "/create-business",
                name: "create-business",
                component: CreateFormBusiness ,
                meta: { Header3: true },
            },
            {
                path: "/news",
                name: "news",
                component: Blog ,
                meta: { Header2: true }
            },
            {
                path: "/news/:id",
                name: "news-item",
                component: BlogItem ,
                meta: { Header2: true }
            },
           // { path: '/:pathMatch(.*)*', name: 'NotFound', component: NotFound },
        ],
    });

