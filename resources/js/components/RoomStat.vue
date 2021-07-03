<template>
    <div :class="enlarge ? 'my-20' : 'my-10'">
        <div :class="enlarge ? 'text-7xl' : 'text-3xl'" class="mb-4">
            <router-link to="/room/qwerty123">Memespected July, 3 at 4:30 PM</router-link>
        </div>
        <div class="my-2">👀 5 partisipants</div>
        <div class="my-2">🥳 4 good things happened</div>
        <div class="my-2">😡 7 problems discussed</div>
        <div class="my-2">📝 2 decisions made</div>
    </div>
</template>

<script>
export default {
    props: {
        enlarge: Boolean
    }
}
</script>
