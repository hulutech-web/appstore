<template>
  <div>
本地游戏同步
    <a-button type="primary" @click="initlocalgame">测试</a-button>
  </div>
</template>

<script>
import localgame from './scripts_list'
export default {
  path:"/admin/system/localgame",
  data(){
    return {
      localgame:localgame
    }
  },
  methods:{
    async initlocalgame(){
      await this.axios.post('admin/localgame/init',{games:this.localgame})
    }
  }
}
</script>

<style scoped>

</style>