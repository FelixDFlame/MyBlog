<template>
  <ul>
      <li v-for="i in data">{{ i }}</li>
      <!-- <example-component path="@{{ asset($path[i]) }}"  title="@{{ $title[i] }}"></example-component> -->
  </ul>
</template>
<script>
    export default {
        props: ['data'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
