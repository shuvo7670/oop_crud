<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita85c43b71526fd5f3ab965da2df23900
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
        ),
        'H' => 
        array (
            'HemiFrame\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'HemiFrame\\' => 
        array (
            0 => __DIR__ . '/..' . '/hemiframe/php-query-builder/src/HemiFrame',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita85c43b71526fd5f3ab965da2df23900::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita85c43b71526fd5f3ab965da2df23900::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita85c43b71526fd5f3ab965da2df23900::$classMap;

        }, null, ClassLoader::class);
    }
}
