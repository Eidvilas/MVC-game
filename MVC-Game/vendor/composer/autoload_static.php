<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3765c2b1d9549c321086a6f1377c0bae
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/classes',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3765c2b1d9549c321086a6f1377c0bae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3765c2b1d9549c321086a6f1377c0bae::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit3765c2b1d9549c321086a6f1377c0bae::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}