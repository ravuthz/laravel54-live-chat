<template lang="html">
    <div class="chat-composer">
        <input type="text" v-model="text" placeholder="Start typing your message ..." @keyup.enter="send"/>
        <!-- v-on:keydown.enter="send" -->
        <button class="btn btn-primary" @click="send">Send</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                text: 'Text'
            }
        },
        methods: {
            send() {
                this.$emit('messagesent', {
                    message: this.text,
                    author: 'Ravuthz'
                });
                this.text = '';
            }
        }
    }
</script>

<style lang="css">
    .chat-composer {
        display: flex;
    }
    .chat-composer input {
        flex: 1 auto;
    }
    .chat-composer button {
        border-radius: 0px;
    }
</style>
