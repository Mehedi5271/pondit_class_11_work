<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92eec8db4666c51227fae746efd78d11
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Student\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Student\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit92eec8db4666c51227fae746efd78d11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92eec8db4666c51227fae746efd78d11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92eec8db4666c51227fae746efd78d11::$classMap;

        }, null, ClassLoader::class);
    }
}