<template>
    <div class="container mx-auto">
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
    </div>
</template>

<script>

import RetroCard from "../components/RetroCard";
import RetroColumn from "../components/RetroColumn";

export default {
    components: {RetroColumn, RetroCard}
}
</script>
