<template>
    <div class="app__column" :class="'app__column--' + type">
        <div class="text-center text-2xl px-4 py-8">{{ name }}</div>
        <div class="relative">
            <textarea
                class="app__create-card-text w-full rounded border p-2 pr-16 mb-8"
                :placeholder="placeholder"
                v-model="text"></textarea>
            <button
                class="app__create-card-btn rounded bg-blue-400 hover:bg-blue-300 text-white absolute p-2"
                @click="save()">
                Send
            </button>
        </div>
        <slot></slot>
    </div>
</template>

<script>



import axios from "axios";

export default {
    props: {
        name: String,
        type: String,
        placeholder: String
    },
    data() {
        return {
            text: ''
        }
    },
    methods: {
        save() {
            axios.post('/posts', {
                postContent: this.text,
                postType: this.type,
            });
        }
    }
}
</script>
