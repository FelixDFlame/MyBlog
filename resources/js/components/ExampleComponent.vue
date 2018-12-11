<template>
    <div class="card" style="width: 18rem; margin:0 auto;">
        <img class="card-img-top" src="../../images/img.jpg" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">My Card</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title','path'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
