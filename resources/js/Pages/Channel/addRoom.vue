<template lang="">
    <div class="flex-col w-100 h-full mt-4 ml-2 mr-2">
    <h1 class="flex-1 font-sans font-thin text-center text-5xl text-grey-darkest">Add Room</h1>
      <div class="flex items-center border-b border-b-2 border-teal py-2">
      <jet-input class="font-sans font-thin text-2xl appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
           type="text"
           placeholder="New Room"
           aria-label="Full name"
           v-model="newRoom"
           @keypress.enter=""
           />
      <button class="bg-gray-500 hover:bg-blue-700 p-1 text-white rounded"
          type="button"
          @click=""
          >
        Add
      </button>
      <button class="flex-no-shrink border-transparent border-4 text-red hover:text-teal-darker text-sm py-1 px-2 rounded"
          type="button"
          @click="cancelRoom()"
          >
        Cancel
      </button>
        </div>
      </div>
</template>
<script>
import JetInput from '@/Jetstream/Input.vue'
export default {
    components: {
        JetInput,
    },
    data: function() {
        return {
            newRoom: '',
        }
    },
    methods: {
        cancelRoom () {
            this.newRoom = ''
        },
    },
}
</script>