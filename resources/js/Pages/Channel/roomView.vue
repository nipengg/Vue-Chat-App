<template lang="">
    <div class="h-96 w-full p-2 overflow-y-scroll h-full flex flex-col-reverse">
        <div v-for="(room, index) in rooms" :key="index">
            <room-item :room="room" />
        </div>
    </div>
</template>
<script>
import roomItem from './roomItem.vue'

export default {
    components: {
        roomItem,
    },
    props: ['rooms'],
}
</script>
<style lang="">

</style>