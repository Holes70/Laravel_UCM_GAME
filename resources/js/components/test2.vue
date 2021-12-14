<template>
  <h1>{{ counter }}</h1>
  <div style='background:red'>
    <button @click="counter++" class='btn btn-success'>+</button>
  </div>
</template>

<script>

export default {
  data() {
    return {
      counter: 0
    }
  }
}
</script>
