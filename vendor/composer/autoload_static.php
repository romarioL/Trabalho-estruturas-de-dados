<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f267720c0ae6e62a012445914d1cf0d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f267720c0ae6e62a012445914d1cf0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f267720c0ae6e62a012445914d1cf0d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
