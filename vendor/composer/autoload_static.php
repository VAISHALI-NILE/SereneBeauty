<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21020dd32d64fa3a3157e0651de063a2
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit21020dd32d64fa3a3157e0651de063a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21020dd32d64fa3a3157e0651de063a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit21020dd32d64fa3a3157e0651de063a2::$classMap;

        }, null, ClassLoader::class);
    }
}