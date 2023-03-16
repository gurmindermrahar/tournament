<template>
    <div class="chat-box">
        <div :key="message.id" v-for="message in messages">
            <div v-if="user.id != message.send_by" class="chat-left-hand">
                <div class="">
                    <span class="">parmodtest2</span>
                    <span class="" v-dateshow="message.created_at"></span>
                </div>
                <p class="css-15sjve94 css-i8s5um">{{ message.message }}</p>
            </div>

            <div  v-else class="chat-right-hand">
                <div class="">
                    <span class="">parmodtest2</span>
                    <span class="" v-dateshow="message.created_at"></span>
                </div>
                <p class="css-15sjve94 css-i8s5um">{{ message.message }}</p>
            </div>

        </div>
    </div>

</template>

<script>
import moment from 'moment';

    const dateshow = (el,value)=> {
        var date=moment(value).fromNow();
        el.innerText=date;
    }

    export default {
        directives: {
            dateshow
        },
        props: ['messages','user','chatwith']
    };
</script>
