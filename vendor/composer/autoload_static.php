<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteca6f7f47b55b0b41bf755b088d69c02
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'L' => 
        array (
            'LionRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'LionRoute\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/LionRoute',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteca6f7f47b55b0b41bf755b088d69c02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteca6f7f47b55b0b41bf755b088d69c02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteca6f7f47b55b0b41bf755b088d69c02::$classMap;

        }, null, ClassLoader::class);
    }
}
