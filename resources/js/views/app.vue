<template>
    <div class="app bg-gray-100">
        <nav class="bg-blue-300 p-4 flex">
            <div class="app__logo flex-grow">
                <router-link to="/" class="underline">Memespective</router-link>
            </div>
            <div>
                <router-link to="/about" class="underline">About</router-link>
            </div>
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
