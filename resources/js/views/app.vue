<template>
    <div class="app">
        <nav class="bg-blue-300 p-4">
            <router-link to="/" class="underline">go to Main page</router-link>
            <router-link to="/about" class="underline">go to About</router-link>
        </nav>
        <router-view></router-view>
    </div>
</template>
<script>
export default {
    computed: {},
    data() {
        return {
            message: "hello world"
        }
    }
};
</script>
