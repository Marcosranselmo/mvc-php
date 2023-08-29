<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb027138747d12c0485155d4fc4c6241f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb027138747d12c0485155d4fc4c6241f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb027138747d12c0485155d4fc4c6241f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb027138747d12c0485155d4fc4c6241f::$classMap;

        }, null, ClassLoader::class);
    }
}
