<template>
    <div class="app">
        <p>
            <router-link to="/">go to Main page</router-link>
            <router-link to="/about">go to About</router-link>
        </p>

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
