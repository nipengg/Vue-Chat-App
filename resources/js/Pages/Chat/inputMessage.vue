<template lang="">
    <div class="relative h-10 m-1">
        <div class="grid grid-cols-6">
            <input type="text" v-model="message" @keyup.enter="sendMessage()" placeholder="Type something..."
                class="col-span-5 outline-none focus:outline-none p-1"
            />
            <button @click="sendMessage()"
                class="bg-gray-500 hover:bg-blue-700 p-1 text-white">Send Text
            </button>
        </div>
    </div>
</template>
<script>
import Input from '../../Jetstream/Input.vue'
export default {
    components: { Input },
    props: ['room'],
    data: function() {
        return {
            message: ''
        }
    },
    methods: {
        sendMessage()
        {
            if(this.message == ' ')
            {
                return;
            }

            axios.post('/chat/rooms/' + this.room.id + '/message', {
                message: this.message
            })
            .then(response => {
                if(response.status == 201)
                {
                    this.message = '';
                    this.$emit('messagesent');
                }
            })
            .catch(error => {
                console.log(error);
            })
        },
    },
}
</script>
