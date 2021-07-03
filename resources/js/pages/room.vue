<template>
    <Page>
        <div class="grid grid-cols-3 gap-5">
            <RetroColumn name="What went well" placeholder="Type something you glad to" type="good">
                <RetroCard meme="/storage/memes/meme1.jpg"/>
                <RetroCard/>
            </RetroColumn>

            <RetroColumn name="What should be improved" placeholder="Type something you worried about" type="bad">
                <RetroCard/>
                <RetroCard meme="/storage/memes/meme1.jpg"/>
            </RetroColumn>

            <RetroColumn name="Retro summary" placeholder="Record all the decisions made" type="summary">
                <RetroCard/>
                <RetroCard/>
            </RetroColumn>
        </div>
    </Page>
</template>

<script>

import RetroCard from "../components/RetroCard";
import RetroColumn from "../components/RetroColumn";
import Page from "./page";

export default {
    components: {Page, RetroColumn, RetroCard},
    mounted() {
        window.hackPageTitle = 'Memespected July, 3 at 4:30 PM';
    },
    created() {
        window.hackPageTitle = 'Memespected July, 3 at 4:30 PM';
    }
}
</script>
