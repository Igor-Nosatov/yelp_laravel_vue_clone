<template>
    <v-row class="pt-3 pb-5" justify="space-between">
        <v-col cols="2">
            <img src="@/images/logo.png" alt="Yelp" class="logo-img pl-5" />
        </v-col>
    </v-row>
    <v-divider></v-divider>
</template>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap");

.header-main1 {
    background-color: #b1b1b1;
}

.logo-img {
    padding-top: 5px;
    height: 60px;
}

.v-btn {
    font-size: 12px;
    margin: 2px;
}

.signup_btn,
.search-btn {
    background-color: #e00707;
    color: #fff;
    font-weight: 400;
    text-align: center;
    font-size: 12px;
}

.login_btn {
    background-color: transparent;
    border: 1px #050505 !important;
    color: #050505;
    font-weight: 600;
    text-align: center;
    font-size: 12px;
}

.pink-border {
    border-color: pink;
}

.search-btn {
    height: 56px !important;
    margin-top: 4px;
}

.x-large {
    font-size: 35px;
}

.height-select-btn {
    height: 73px !important;
}

.title-catch-phrase {
    width: 100%;
    font-family: "Dancing Script", cursive;
    font-size: 40px;
    padding-left: 16%;
    position: relative;
    top: -90px;
    right: 20px;
}

.account-icon {
    font-size: 38px;
}

.menu-list {
    width: 200px;
}

.promo-background {
    background-image: url("../../images/45656.jpg");
    background-repeat: no-repeat, repeat;
    background-position: center;
    /* Center the image */
    background-size: cover;
    /* Resize the background image to cover the entire container */
    height: 500px;
}

.promo-title {
    padding-top: 290px;
}</style>



