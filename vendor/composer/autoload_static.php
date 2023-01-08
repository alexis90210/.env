<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcca1d5f4d4087d111804af06a96b9894
{
    public static $files = array (
        '2a767f39cf79a7d01eae7536e5ea92e1' => __DIR__ . '/../..' . '/src/env.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hisoka\\Env\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hisoka\\Env\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcca1d5f4d4087d111804af06a96b9894::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcca1d5f4d4087d111804af06a96b9894::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcca1d5f4d4087d111804af06a96b9894::$classMap;

        }, null, ClassLoader::class);
    }
}