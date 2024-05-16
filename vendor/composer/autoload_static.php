<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit046adfe074dd1d0de6cec39861c097b5
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eagleminds\\WhatsappSender\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eagleminds\\WhatsappSender\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit046adfe074dd1d0de6cec39861c097b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit046adfe074dd1d0de6cec39861c097b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit046adfe074dd1d0de6cec39861c097b5::$classMap;

        }, null, ClassLoader::class);
    }
}