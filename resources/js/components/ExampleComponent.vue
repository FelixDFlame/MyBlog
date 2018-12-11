<props>
</props>
<template>
    <div class="card" style="width: 18rem; margin:0 auto;">
        <img class="card-img-top" :src=imagesrc alt="Card image cap">
        <div class="card-body">
            <p class="card-text">My Blog Test</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['imagesrc'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
