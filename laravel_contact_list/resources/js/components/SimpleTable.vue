<template>
    <div>
        teste
        {{ contacts }}
    </div>    
</template>
<script>
export default {
    props: ['contacts'],

    data() {
        return {

        }
    },

    mounted() {
        console.log('teste');
    }
}
</script>
<style>

</style>