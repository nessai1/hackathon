<template>
    <Page>
        <div class="relative">
            <router-link
                tag="button"
                to="/room/qwerty123"
                class="border rounded bg-blue-400 hover:bg-blue-300 p-3 text-white uppercase absolute right-0 top-4">
                New room
            </router-link>
            <RoomStat :enlarge="true"/>
            <RoomStat/>
            <RoomStat/>
            <RoomStat/>
        </div>
    </Page>
</template>

<script>

import Page from "./page";
import RoomStat from "../components/RoomStat";
import axios from 'axios';

export default {
    components: {RoomStat, Page},
    data() {
        return {
            authorized: false,
        }
    },
    created() {
        //axios.get('')
    },
    mounted() {
        axios.post('/auth').then(response => {
            this.authorized = response.data
            console.log(this.authorized);
            if (!this.authorized && window.location.pathname !== '/login')
            {
                window.location.pathname = '/login';
            }
        });
    }
}
</script>
