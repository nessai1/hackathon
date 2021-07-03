<template>
    <div class="app bg-gray-100">
        <Navbar/>
        <router-view></router-view>
    </div>
</template>
<script>

import Navbar from "../components/Navbar";
import axios from "axios";
export default {
    components: {Navbar},
    computed: {},
    mounted() {
        axios.post('/auth').then(response => this.authorized = response.data);
        if (!this.authorized && window.location.pathname !== '/login')
        {
            window.location.pathname = '/login';
        }
    },
    data() {
        return {
            authorized: false,
            message: "hello world"
        }
    }
};
</script>
