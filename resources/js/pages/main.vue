<template>
    <div class="container mx-auto">
        <div class="grid grid-cols-3 gap-5">
            <div>
                What went well

                <RetroCard/>
                <RetroCard/>
            </div>
            <div>
                What should be improved

                <RetroCard/>
                <RetroCard/>
                <RetroCard/>
                <RetroCard/>
            </div>
            <div>
                Retro summary and next actions

                <RetroCard/>
            </div>
        </div>
    </div>
</template>

<script>

import RetroCard from "../components/RetroCard";

export default {
    components: {RetroCard}
}
</script>
