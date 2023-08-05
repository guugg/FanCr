<script setup lang="ts">
import { ref } from "vue";

defineProps<{ msg: string }>();

const count = ref(0);
</script>

<template>
  <div class="container text-center mx-auto px-4">
    <div class="flex place-content-center gap-11 mt-8">
      <a href="https://vitejs.dev" target="_blank">
        <img src="../assets/vite.svg" class="logo" alt="Vite logo" />
      </a>

      <a href="https://vuejs.org/" target="_blank">
        <img src="../assets/vue.svg" class="logo vue" alt="Vue logo" />
      </a>
    </div>

    <h1 class="text-2xl font-bold  text-center mt-2">{{ msg }}</h1>

    <div class="my-5">
      <button 
      class="binx" 
      type="button" @click="count++">按键 {{ count }}</button>
      
      <div class="mt-3 bg-green-50 border border-green-200 text-sm text-green-600 rounded-md p-4" role="alert">
        编辑components/HelloWorld.vue测试 HMR
  </div>
      
    </div>

    <p>
      查看官方VUE + VITE入门者的

      <a class="binnn" href="https://vuejs.org/guide/quick-start.html#local" target="_blank">
        create-vue
      </a>
    </p>
    <p>
      在您的IDE中安装
      <a class="binnn" href="https://github.com/vuejs/language-tools" target="_blank">Volar</a>
      以获得更好的DX
    </p>
    <p class="read-the-docs">单击Vite和Vue徽标以了解更多信息</p>
  </div>
</template>

<style scoped>
.read-the-docs {
  color: #888;
}
.binx{
  @apply py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-green-200 font-semibold text-green-500 hover:text-white hover:bg-green-500 hover:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800
}
.binnn{
  @apply py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all text-sm dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:ring-offset-gray-800
}

</style>
