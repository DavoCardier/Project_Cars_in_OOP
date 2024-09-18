<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit521ef0c41e68f953ba752ffb8a7a89e7
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'iPsyco\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'iPsyco\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit521ef0c41e68f953ba752ffb8a7a89e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit521ef0c41e68f953ba752ffb8a7a89e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit521ef0c41e68f953ba752ffb8a7a89e7::$classMap;

        }, null, ClassLoader::class);
    }
}
