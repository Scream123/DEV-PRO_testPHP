<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57c82e09e91ad9fefdb6bab0b1f54b53
{
    public static $firstCharsPsr4 = array (
        'l' => true,
    );

    public static $prefixDirsPsr4 = array (
        'liw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->firstCharsPsr4 = ComposerStaticInit57c82e09e91ad9fefdb6bab0b1f54b53::$firstCharsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57c82e09e91ad9fefdb6bab0b1f54b53::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
