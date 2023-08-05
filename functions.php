<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

//导航
require_once get_template_directory() . '/app/setup.php';

