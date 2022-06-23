<template>
  <div>
    <a-button type="primary" @click="test">测试</a-button>
  </div>
</template>

<script>
export default {
  path:'/admin/game/index',
  methods: {
    async test() {
      await this.axios.post('admin/game/test')
    }
  }
}
</script>

<style scoped>

</style>