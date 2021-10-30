<template lang="">
    <div class="grid grid-cols-2">
        <div class="font-bold text-xl mt-2">
            {{ selected.name }} Chat
        </div>
        <div>
            <select v-model="selected" @change="$emit('roomchanged', selected)" class="float-right">
                <option v-for="(room, index) in rooms" :key="index" :value="room">{{room.name}}</option>
            </select>
        </div>
    </div>
</template>
<script>
export default {
    props: ['rooms', 'currentRoom'],
    data: function() {
        return {
            selected: '',
        }
    },
    created() {
        this.selected = this.currentRoom;
    },
}
</script>
<style lang="">

</style>