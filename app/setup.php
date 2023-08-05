<?php

// 是否为开发环境  true  false
define('IS_VITE_DEVELOPMENT', true);
define('VITE_SERVER', 'http://localhost:3100');
//define
define('DIST_DEF', 'assets');
define('DIST_URI',  get_template_directory_uri() . '/' . DIST_DEF);
define('DIST_PATH', get_template_directory()     . '/' . DIST_DEF);
define('JS_DEPENDENCY', array()); // array( 'jquery' ) as example
define('JS_LOAD_IN_FOOTER', true); // load scripts in footer?


add_action('wp_enqueue_scripts', function () {




    if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {
        // 如果变量等于value1，执行这里的代码
        add_action('wp_head', function () {
            $theme = VITE_SERVER;
            echo '<script type="module" crossorigin src="' . $theme . '/src/main.ts"></script>';
            echo '<script type="module" crossorigin src="' . $theme . '/vue/main.ts"></script>';
        }, 100);
        
    } else {
        // 如果以上条件都不满足，执行这里的代码
        $manifest = json_decode(file_get_contents(DIST_PATH . '/manifest.json'), true);
        if (is_array($manifest)) {
            $manifest_key = array_keys($manifest);
            if (isset($manifest_key[0])) {
                // 导入前端CSS
                wp_enqueue_style('css', DIST_URI . '/' . @$manifest["index.css"]['file']);
                wp_enqueue_style('ccc', DIST_URI . '/' . @$manifest["vue/main.css"]['file']);
                // 导入前端JS
                $js_file = @$manifest["index.html"]['file'];
                $js_files = @$manifest["vue/main.ts"]['file'];
                if (!empty($js_file)) {
                    wp_enqueue_script('main', DIST_URI . '/' . $js_file, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER);
                }
                if (!empty($js_files)) {
                    wp_enqueue_script('mains', DIST_URI . '/' . $js_files, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER);
                }
            }
        }
    }
});



// 为wp_enqueue_script添加属性
add_filter('script_loader_tag', function (string $tag, string $handle, string $src) {
    if (in_array($handle, ['main', 'mains']))
        return '<script type="module" src="' . esc_url($src) . '" defer></script>';
    return $tag;
}, 10, 3);
