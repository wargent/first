<template>
  <div class="winter">
      <el-button @click="getUser">点我2</el-button>
      <ul>
          <li v-for="msg in msgs"> 
              标题:{{msg.title}} <br/> 内容:{{msg.content}}
          </li>
      </ul>
  </div>
</template>

<script>
import axios from 'axios'
 export default{
  name:'winter',
  data() {
      return{
          msgs:[]
      }
  },
  methods:{
      getUser(){
          axios
          .get('/other/index')
          .then(response => (this.msgs = response.data))
      }
  }
 }
</script>
<style>
ul li{

list-style: none;

}
</style>
