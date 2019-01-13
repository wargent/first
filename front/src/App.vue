<template>
  <div id="app">
    <img src="./assets/logo.png">
    <br>
       <el-button><router-link to="/">Index</router-link></el-button>
       <el-button><router-link to="/other">Other</router-link></el-button>
    <br>
    <router-view/>
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
// import Index from './views/Index.vue'

export default {
  name: 'app',
  components: {
    // HelloWorld,
    // Index
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
