<template>
    <div class="app bg-gray-100">
        <Navbar/>
        <router-view></router-view>
    </div>
</template>
<script>
import Navbar from "../components/Navbar";
export default {
    components: {Navbar},
    computed: {},
    data() {
        return {
            message: "hello world"
        }
    }
};
</script>
