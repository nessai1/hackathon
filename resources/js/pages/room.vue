<template>
    <Page>
        <div class="grid grid-cols-3 gap-5">
            <RetroColumn name="What went well" placeholder="Type something you glad to" type="good">
                <RetroCard v-for="item in goodItems" :post="item" :key="item.id"/>
            </RetroColumn>

            <RetroColumn name="What should be improved" placeholder="Type something you worried about" type="bad">
                <RetroCard v-for="item in badItems" :post="item" :key="item.id"/>
            </RetroColumn>

            <RetroColumn name="Retro summary" placeholder="Record all the decisions made" type="summary">
                <RetroCard v-for="item in summaryItems" :post="item" :key="item.id"/>
            </RetroColumn>
        </div>
    </Page>
</template>

<script>

import RetroCard from "../components/RetroCard";
import RetroColumn from "../components/RetroColumn";
import Page from "./page";
import axios from "axios";

export default {
    components: {Page, RetroColumn, RetroCard},
    mounted() {
        window.hackPageTitle = 'Memespected July, 3 at 4:30 PM';
    },
    data() {
        return {
            goodItems: [],
            badItems: [],
            summaryItems: []
        };
    },
    created() {
        axios.get('/posts').then(response => {
            response.data.map(item => {
                if (item.column_type === 'good') {
                    this.goodItems.push(item);
                } else if (item.column_type === 'bad') {
                    this.badItems.push(item);
                } else if (item.column_type === 'summary') {
                    this.summaryItems.push(item);
                }
            });
        });
    }
}
</script>
