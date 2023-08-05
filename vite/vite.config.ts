import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import { resolve } from "path";

// https://vitejs.dev/config/
export default defineConfig({
  // config
  root: "",
  base:
    process.env.NODE_ENV === "development"
      ? "/"
      : "/wp-content/themes/fancr/assets/",

  plugins: [vue()],
  build: {
    // 生产生成的输出目录,直接输出到主题根目录
    outDir: resolve(__dirname, "../assets"),
    // 在 outDir 中生成 manifest.json
    manifest: true,
    // ESBUILD目标
    target: "es2018",
    rollupOptions: {
      input: {
        // 可以选择覆盖默认的 .html 入口
        min: resolve(__dirname, "index.html"),  //默认开发环境/默认资产
        vue: resolve(__dirname, "vue/main.ts"), //一个vue组件

      },
    },
  },
  server: {
    fs: {
      strict: false,
      // 允许为项目根目录的上一级提供服务
      allow: [
        "../app/**/*.php",
        "./src/*.{vue,js,ts}",
        "./vue/*.{vue,js,ts}",
      ],
    },
    port:3100,
    origin: "http://localhost:3100",
    //设为 true 时若端口已被占用则会直接退出，而不是尝试下一个可用端口。
    strictPort: true,
    https: false,
  },
});
