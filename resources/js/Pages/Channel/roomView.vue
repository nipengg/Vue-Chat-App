<template lang="">
    <div class="p-2">
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