<template lang="html">
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
    </div>
</template>

<script>
    export default {
        props: ['messages']
        // Local Data
        // data() {
        //     return {
        //         messages: [
        //             {
        //                 message: 'Message text is here 1',
        //                 author: 'Author 1'
        //             },
        //             {
        //                 message: 'Message text is here 2',
        //                 author: 'Author 2'
        //             },
        //             {
        //                 message: 'Message text is here 3',
        //                 author: 'Author 3'
        //             },
        //             {
        //                 message: 'Message text is here 4',
        //                 author: 'Author 4'
        //             }
        //         ]
        //     }
        // }
    }
</script>

<style lang="css">
    .chat-log .chat-message:nth-child(even) {
        background-color: #ccc;
    }
</style>
