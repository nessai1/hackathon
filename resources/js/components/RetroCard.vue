<template>
    <div class="app__card border-2 rounded mb-6">
        <div class="p-4 pb-0">
            <div class="font-bold mb-4">{{ post.author }}</div>
            <div>
                {{ post.content }}
            </div>
            <div class="flex flex-row-reverse text-2xl">
                <span class="p-4 cursor-pointer" @click="dislike()">
                    👎 <span class="text-gray-700 text-xs">{{ printDislikes() }}</span>
                </span>
                <span class="p-4 cursor-pointer" @click="like()">
                    👍 <span class="text-gray-700 text-xs">{{ printLikes() }}</span>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: {
        post: Object
    },
    data() {
        return {
            likes: this.post.like || 0,
            dislikes: this.post.dislike || 0,
        }
    },
    computed: {
        printLikes() {
            if (this.likes > 0) {
                return `x${this.likes}`;
            }
            return '';
        },
        printDislikes() {
            if (this.dislikes > 0) {
                return `x${this.dislikes}`;
            }
            return '';
        }
    },
    methods: {
        like() {
            axios.post('/posts/' + post.id + '/like');
            this.likes++;
        },

        dislike() {
            axios.post('/posts/' + post.id + '/dislike');
            this.dislikes++;
        }
    }
}
</script>
