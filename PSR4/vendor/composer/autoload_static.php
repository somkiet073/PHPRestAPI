<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9873e649c0770eddad70eaac93b8a77
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Statics\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Statics\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita9873e649c0770eddad70eaac93b8a77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9873e649c0770eddad70eaac93b8a77::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
