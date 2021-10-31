<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Channel
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <add-room />
                    <room-view :rooms="chatRooms"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import RoomView from './roomView.vue'
    import AddRoom from './addRoom.vue'

    export default defineComponent({
        components: {
            AppLayout,
            RoomView,
            AddRoom,
        },
        data: function() {
            return {
                chatRooms: [],
            }
        },
        methods: {
            getRooms()
            {
                axios.get('/chat/rooms')
                .then(response => {
                    this.chatRooms = response.data;
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                })
            },
        },
        created() {
            this.getRooms();
        },
    })
</script>
