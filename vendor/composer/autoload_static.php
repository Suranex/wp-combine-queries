<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a6c91fd7d0e95cf2ded959090e4647f
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'CombinedQuery\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'CombinedQuery\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a6c91fd7d0e95cf2ded959090e4647f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a6c91fd7d0e95cf2ded959090e4647f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}