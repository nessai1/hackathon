<template>
    <div>
        About page
    </div>
</template>

<script>
import axios from "axios";

export default {
    mounted() {
        axios.post('/auth').then(response => this.authorized = response.data);
        if (!this.authorized && window.location.pathname !== '/login')
        {
            window.location.pathname = '/login';
        }
    }
}
</script>
