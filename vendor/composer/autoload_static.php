<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit921a003fd864ed864dd7a27b8c1916e2
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Liborm85\\ComposerVendorCleaner\\' => 31,
        ),
        'F' => 
        array (
            'Fan\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Liborm85\\ComposerVendorCleaner\\' => 
        array (
            0 => __DIR__ . '/..' . '/liborm85/composer-vendor-cleaner/src',
        ),
        'Fan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit921a003fd864ed864dd7a27b8c1916e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit921a003fd864ed864dd7a27b8c1916e2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit921a003fd864ed864dd7a27b8c1916e2::$classMap;

        }, null, ClassLoader::class);
    }
}
