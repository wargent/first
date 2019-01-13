<template>
  <div class="winter">
      <el-button @click="getUser">点我1</el-button>
      <div>{{msg.code}}</div>
      <div>{{msg.msg}}</div>
  </div>
</template>

<script>
import axios from 'axios'
 export default{
  name:'winter',
  data() {
      return{
          msg:''
      }
  },
  methods:{
      getUser(){
          axios
          .get('/index/index')
          .then(response => (this.msg = response.data))
      }
  }
 }
</script>
