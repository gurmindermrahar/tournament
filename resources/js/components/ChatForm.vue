
<template>
    <div class="text-box_holder">
        <textarea v-model="newMessage" @keyup.enter="sendMessage" id="btn-input" name="message"  class="send-msg" placeholder="Chat with us..."></textarea>

        <div class="chat-butn-holder">
            <button><i mi-name="image" class="material-icons navigation-icon mr-2"></i></button>
            <button><i mi-name="send" id="btn-chat" @click="sendMessage" class="material-icons navigation-icon"></i></button>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['user','chatwith'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    chatwith: this.chatwith.id,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }
    }
</script>
