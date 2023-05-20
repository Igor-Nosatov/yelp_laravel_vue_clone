import {
    createRouter,
    createWebHistory,
} from "vue-router/dist/vue-router.esm-bundler";
import Home from "../views/Home.vue";
import SignUp from "../views/SignUp.vue";
import Login from "../views/Login.vue";
import BusinessCatalog from "../views/BusinessCatalog.vue";
import BusinessCatalogItem from "../views/BusinessCatalogItem.vue";
import Review from "../views/Review.vue";
import Account from "../views/Account.vue";
import Collection from "../views/Collection.vue";
import Event from "../views/Event.vue";
import EventItem from "../views/EventItem.vue";
import EventCreate from "../views/EventCreate.vue";
import CreateFormBusiness from "../views/CreateFormBusiness.vue";
import EditFormBusiness from "../views/EditFormBusiness.vue";
import Blog from "../views/Blog.vue";
import BlogItem from "../views/BlogItem.vue";

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
                component: BusinessCatalog,
            },
            {
                path: "/catalog/:id",
                name: "catalog-item",
                component: BusinessCatalogItem,
            },
            {
                path: "/review",
                name: "review",
                component: Review,
            },
            {
                path: "/account",
                name: "account",
                component: Account,
            },
            {
                path: "/collection",
                name: "collection",
                component: Collection,
            },
            {
                path: "/event",
                name: "event",
                component: Event,
            },
            {
                path: "/event/:id",
                name: "event-item",
                component: EventItem,
            },
            {
                path: "/event-create",
                name: "event-create",
                component: EventCreate,
            },
            {
                path: "/edit-business/:id",
                name: "edit-business",
                component: EditFormBusiness,
            },
            {
                path: "/create-business",
                name: "create-business",
                component: CreateFormBusiness ,
            },
            {
                path: "/blog",
                name: "blog",
                component: Blog ,
            },
            {
                path: "/blog/:id",
                name: "blog-item",
                component: BlogItem ,
            },
        ],
    });

