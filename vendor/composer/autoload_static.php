<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd795aaf2451e0dc540d2afa29b4ff00c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd795aaf2451e0dc540d2afa29b4ff00c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd795aaf2451e0dc540d2afa29b4ff00c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd795aaf2451e0dc540d2afa29b4ff00c::$classMap;

        }, null, ClassLoader::class);
    }
}