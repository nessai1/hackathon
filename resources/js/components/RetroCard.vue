<template>
    <div class="app__card border-2 rounded mb-6">
        <div class="p-4 pb-0">
            <div class="font-bold mb-4">{{ post.user_id }}</div>
            <div>
                {{ post.content }}
            </div>
            <div class="flex flex-row-reverse text-2xl">
                <span class="p-4 cursor-pointer" @click="dislike()">
                    👎 <span class="text-gray-700 text-xs">{{ printDislikes }}</span>
                </span>
                <span class="p-4 cursor-pointer" @click="like()">
                    👍 <span class="text-gray-700 text-xs">{{ printLikes }}</span>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: 'RetroCard',
    props: {
        post: Object
    },
    data() {
        return {
            likes: parseInt(this.post.like) || 0,
            dislikes: parseInt(this.post.dislike) || 0,
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
            axios.post('/posts/' + this.post.id + '/like');
            this.likes++;
        },

        dislike() {
            axios.post('/posts/' + this.post.id + '/dislike');
            this.dislikes++;
        },

        showMeme() {
            const panel1Handle = this.$showPanel({
                component : 'my-test-component',
                props: {
                    //any data you want passed to your component
                }
            })

            panel1Handle.promise
                .then(result => {
                    console.log(result);
                });
        },
    }
}
</script>
