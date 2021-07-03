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

export default {
    components: {RoomStat, Page},
    created() {
        window.hackPageTitle = '';
    }
}
</script>
