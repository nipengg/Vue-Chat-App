<template lang="">
    <div class="flex bg-grey-light w-full h-auto p-2 mt-4 rounded-lg">
        <!--<div class="w-4/6 text-2xl text-center pt-1 shadow-md rounded-lg">
            {{ room.name }}
        </div> -->
        <table class="table-fixed w-full text-center">
            <tbody>
                <tr>
                    <td class="border px-4 py-2">{{ room.name }}</td>
                    <td class="border w-md px-4 py-2">
                        <button @click="" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    props: ['room']
}
</script>
<style lang="">

</style>