import { createApp } from "vue";
import "vite/modulepreload-polyfill";
import "./style.scss";
import App from "./App.vue";

createApp(App).mount("#app");

console.log("正在测试编译后的BBB组件TS文件");
