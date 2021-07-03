<template>
    <nav class="bg-blue-400 p-4 grid grid-cols-3 gap-5 text-2xl text-white">
        <div class="app__logo">
            <router-link to="/" class="uppercase">Memespective</router-link>
        </div>
        <div class="text-center">{{ pageTitle }}</div>
        <div class="text-right">
            <router-link to="/login" class="underline">Login</router-link>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            pageTitle: ''
        }
    },
    mounted() {
        this.pageTitle = window.hackPageTitle || '';
    }
}
</script>
