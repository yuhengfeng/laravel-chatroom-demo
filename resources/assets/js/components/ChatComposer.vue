<template>
    <div class="chat-composer">
            <div class="input-group">
                <input type="text" class="form-control" v-model="messageText"  placeholder="Search for..." @keyup.enter="sendMessage" >
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button" @click="sendMessage">发送</button>
                </span>
            </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messageText: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: {
                        name: $('.navbar-right .dropdown-toggle').text()
                    }
                });
                this.messageText = '';
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
        padding: .5rem 1rem;
    }

    .chat-composer button {
        border-radius: 0;
    }
</style>