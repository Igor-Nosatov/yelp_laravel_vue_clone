import requestService from "../requestService.js";
const apiEndpoint = "/blog";

const blogDataService = {
    async fetchAllBlogs() {
        const response = await requestService.get(apiEndpoint);
        return response?.data?.data;
    },
    async fetchBlogById(id) {
        const response = await requestService.get(apiEndpoint + `/` + id);
        return response?.data?.data;
    },
    async createBlog(blog) {
        const response = await requestService.post(apiEndpoint, blog);
        return response?.data?.data;
    },
    async updateBlog(blog) {
        const response = await requestService.put(
            apiEndpoint + `/` + blog.id,
            blog
        );
        return response?.data?.data;
    },
    async deleteBlog(id) {
        const response = await requestService.delete(apiEndpoint + `/` + id);
        return response;
    },
};
export default blogDataService;
