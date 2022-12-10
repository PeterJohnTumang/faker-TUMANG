<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7088f1cae09d0223ee06d0642efcd65f
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7088f1cae09d0223ee06d0642efcd65f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7088f1cae09d0223ee06d0642efcd65f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7088f1cae09d0223ee06d0642efcd65f::$classMap;

        }, null, ClassLoader::class);
    }
}