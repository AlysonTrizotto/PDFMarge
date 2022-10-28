<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9433aad3ae7715ef35bf66f3eb6b22e
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9433aad3ae7715ef35bf66f3eb6b22e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9433aad3ae7715ef35bf66f3eb6b22e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9433aad3ae7715ef35bf66f3eb6b22e::$classMap;

        }, null, ClassLoader::class);
    }
}
