<template>
    <Page>
        <RoomStat enlarge="true"/>
        <RoomStat/>
        <RoomStat/>
        <RoomStat/>
    </Page>
</template>

<script>

import Page from "./page";
import RoomStat from "../components/RoomStat";

export default {
    components: {RoomStat, Page}
}
</script>
