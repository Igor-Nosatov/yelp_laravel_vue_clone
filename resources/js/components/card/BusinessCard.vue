<template>
    <v-card class="mx-auto custom-card rounded-0" width="400" height="520">
        <v-card-title>
            <v-list>
                <v-list-item prepend-avatar="https://cdn.vuetifyjs.com/images/john.png" title="Emily C."
                    subtitle="Added 4 photos">
                </v-list-item>
            </v-list>
        </v-card-title>
        <v-img src="https://cdn.vuetifyjs.com/images/cards/house.jpg" class="align-end" height="200px" width="400px"
            cover>
        </v-img>
        <v-card-item>
            <a href="https://example.com" target="_blank">
                <v-card-title class="card-title">Golden Era Vegan Restaurant</v-card-title>
            </a>
            <v-card-subtitle>
                <v-icon size="x-large">mdi-star-box</v-icon>
                <v-icon size="x-large">mdi-star-box</v-icon>
                <v-icon size="x-large">mdi-star-box</v-icon>
                <v-icon size="x-large">mdi-star-box</v-icon>
                <v-icon size="x-large">mdi-star-box</v-icon>
            </v-card-subtitle>
        </v-card-item>
        <v-card-text>
            <p>Wandered in here for a light bite & smoothie & a healthier happy hour alternative after an</p>
            <a href="https://example.com" target="_blank">
              Continue reading
            </a>
        </v-card-text>

        <v-divider></v-divider>
        <v-card-actions class="d-flex flex-row justify-start pt-3">
            <v-tooltip location="bottom">
                <template v-slot:activator="{ props }">
                    <v-btn size="large" color="surface-variant" variant="text"
                        v-bind="props">
                        <v-icon>mdi-bow-arrow</v-icon>
                    </v-btn>
                </template>
                <span> Useful</span>
            </v-tooltip>
            <v-tooltip location="bottom">
                <template v-slot:activator="{ props }">
                    <v-btn size="large" color="surface-variant" variant="text"
                        v-bind="props">
                        <v-icon>mdi-emoticon-outline</v-icon>
                    </v-btn>
                </template>
                <span> Funny</span>
            </v-tooltip>
            <v-tooltip location="bottom">
                <template v-slot:activator="{ props }">
                    <v-btn class=" tolltip-btn" size="large" color="surface-variant" variant="text"
                        v-bind="props">
                        <v-icon>mdi-emoticon-cool-outline</v-icon>
                    </v-btn>
                </template>
                <span>Cool</span>
            </v-tooltip>
        </v-card-actions>
    </v-card>
</template>
