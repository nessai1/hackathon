<template>
    <div class="app__column" :class="'app__column--' + type">
        <div class="text-center text-2xl p-4">{{ name }}</div>
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: {
        name: String,
        type: String
    }
}
</script>
