<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">
                Laravel + Vue JS Chat App
            </div>

            <div class="mt-6 text-gray-500">
                Laravel + Vue JS Chat App is a chat application like Discord text channel that you can use to communicate with other user,
                You can also manage your channel room like create a new one or delete your channel. with Laravel Jetstream it provides a
                beautiful development environment that help building user authentication scaffolding. Feel free to try the Chat App feature
                <br>
                <br>
                Thank You!
                <br>
                Neville Cornelius Tjampan
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'

    export default defineComponent({
        components: {
            JetApplicationLogo,
        },
    })
</script>
