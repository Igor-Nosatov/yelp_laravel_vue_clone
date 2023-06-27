import { defineStore } from "pinia";
import blogDataService from "../../services/blog/index";

export const useBlogStore = defineStore("blogStore", {
    state: () => {
        return {
            blogData:[],
            blogById: {},
        };
    },
    getters: {},
    actions: {
        async fetchBlogData() {
            this.blogData = await blogDataService.fetchAllBlogs();
        },
        async fetchBlogDataById(id) {
            this.blogById = await blogDataService.fetchBlogById(id);
        },
        async storeNewBlog(data){
            await blogDataService.createBlog(data);
        },
        async updateCurrentBlog(blogById){
            await blogDataService.updateBlog(blogById);
        },
        async destroyByIdBlog(id) {
            await blogDataService.deleteBlog(id);
        },
    },
});
