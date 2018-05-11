<template lang="html">
    <div class="chat-log">
         <chat-message v-for="message in messages" :key="message.id" :message.sync="message"></chat-message>
    </div>
</template>

<script>
export default {
    props:['messages'],
}

</script>

<style lang="css">
    .chat-log .chat-message:nth-child(even) {
        background-color: #ccc;
    }
    .chat-log .chat-message .span:nth-child(even) {
        background-color: #5cb85c;
    }
    .chat-log{
        margin: 2rem;
    }
    .empty {
        padding: 1rem;
        text-align: center;
    }
</style>