import axios from "axios";
import exportService from "../export";
import requestService from "../requestService";

const authService = {
    init: function () {
        const token = this.loggedIn();
        if (token) {
            axios.defaults.headers.common = {
                Authorization: `Bearer ${token}`,
            };
        }
    },
    loggedIn: function () {
        return localStorage.getItem("authToken");
    },
    user: async function () {
        if (!localStorage.authToken) return null;

        if (localStorage.user) {
            return JSON.parse(localStorage.user);
        } else {
            try {
                const response = await requestService.get("/user");
                localStorage.user = JSON.stringify(
                    response?.data?.data || null
                );
                return response?.data?.data || null;
            } catch (err) {
                this.resetHeaders();
                return await Promise.reject(err.response);
            }
        }
    },
    setToken: function (token) {
        if (!token) {
            return;
        }
        localStorage.setItem("authToken", token);
    },
    login: async function (email, password) {
        try {
            const response = await axios.post(
                `${window.location.origin}/api/login`,
                { email, password }
            );
            const responseData = (await response?.data?.data) || {};
            const token = responseData["token"];
            this.setToken(token);

            axios.defaults.headers.common["Authorization"] = `Bearer ${token}`;
            exportService.login();
            return responseData;
        } catch (err) {
            return await Promise.reject(err.response);
        }
    },
    register: async function (registerData = null) {
        if (!registerData) return;
        const response = await axios.post(
            `${window.location.origin}/api/register`,
            {
                ...registerData,
            }
        );
        if (response.error) return false;
        const responseData = (await response?.data.data) || {};
        const token = responseData["token"];
        this.setToken(token);
        axios.defaults.headers.common = { Authorization: `Bearer ${token}` };
    },
    update: async function (userData = null) {
        if (!userData) return;
        const response = await axios.put(`${window.location.origin}/api/user`, {
            ...userData,
        });
        if (response.error) return false;
        return (await response?.data.data) || {};
    },
    resetHeaders: function () {
        localStorage.removeItem("authToken");
        localStorage.removeItem("user");

        axios.defaults.headers.common = { Authorization: "" };
        exportService.login();
    },
};

export default authService;
