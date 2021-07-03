<template>
    <nav class="bg-blue-300 p-4 flex">
        <div class="app__logo flex-grow">
            <router-link to="/" class="underline">Memespective</router-link>
        </div>
        <div>
            <router-link to="/room/qwerty123" class="underline">Single retro</router-link>
            <router-link to="/about" class="underline">About</router-link>
            <router-link to="/login" class="underline">Login</router-link>
        </div>
    </nav>
</template>

<script>
export default {
}
</script>
