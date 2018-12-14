<template>

    <div class="container">
        <p>Hello World</p>
        <div v-text="info"></div>
        <!-- <div v-html="info.pengumumanDetail.isi"> -->
        </div>
    </div>
</template>
<script>
    export default {
        props: ['info'],
        mounted() {
            console.log('Component mounted.')
        }
    }
    // new Vue({
    // el: '#app',
    // props: ['info'],
    // data () {
    //     return {
    //     info: null
    //     }
    // },
    // mounted () {
    //     axios
    //     .get('https://api.coindesk.com/v1/bpi/currentprice.json')
    //     .then(response => (this.info = response))
    // }
    // })
</script>