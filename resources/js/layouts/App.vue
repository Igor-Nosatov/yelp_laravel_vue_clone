<template>
    <v-layout>
        <v-container>
            <v-app-bar>
                <v-row>
                    <v-col cols="2">
                        <v-app-bar-nav-icon>
                            <img alt="Yelp" />
                        </v-app-bar-nav-icon>
                    </v-col>
                    <v-col cols="2">
                        <v-select label="Select" :items="[
                            'California',
                            'Colorado',
                            'Florida',
                            'Georgia',
                            'Texas',
                            'Wyoming',
                        ]"></v-select>
                    </v-col>
                    <v-col cols="2">
                        <v-select label="Select" :items="[
                            'California',
                            'Colorado',
                            'Florida',
                            'Georgia',
                            'Texas',
                            'Wyoming',
                        ]"></v-select>
                    </v-col>
                    <v-col cols="1">
                        <v-select label="Select" :items="[
                            'California',
                            'Colorado',
                            'Florida',
                            'Georgia',
                            'Texas',
                            'Wyoming',
                        ]"></v-select>
                    </v-col>
                    <v-col cols="3">
                        <v-btn text>Write Review</v-btn>
                        <v-btn outlined>Login</v-btn>
                        <v-btn elevated>Sign Up</v-btn>
                    </v-col>
                </v-row>
            </v-app-bar>
            <v-row class="router-view">
                <v-col cols="1"></v-col>
                <v-col cols="10"><router-view /></v-col>
                <v-col cols="1"></v-col>
            </v-row>
            <TopFooter />
            <BottomFooter />
        </v-container>
    </v-layout>
</template>

<script>
import TopFooter from "@/components/footer/TopFooter.vue";
import BottomFooter from "@/components/footer/BottomFooter.vue";

export default {
    components: {
        TopFooter,
        BottomFooter,
    },
    setup() { },
};
</script>
<style scoped>
.router-view {
    margin-top: 100px;
    margin-bottom: 100px;
    min-height: 400px;
}
</style>
