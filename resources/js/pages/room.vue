<template>
    <Page>
        <div class="grid grid-cols-3 gap-5">
            <RetroColumn name="What went well" type="good">
                <RetroCard/>
                <RetroCard/>
            </RetroColumn>

            <RetroColumn name="What should be improved" type="bad">
                <RetroCard/>
                <RetroCard/>
            </RetroColumn>

            <RetroColumn name="Retro summary and next actions" type="summary">
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
    components: {Page, RetroColumn, RetroCard}
}
</script>
