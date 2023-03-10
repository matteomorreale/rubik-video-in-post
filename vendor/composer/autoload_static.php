<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit181bbe27db13c24d812f72c5e6064898
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spatie\\SchemaOrg\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spatie\\SchemaOrg\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/schema-org/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit181bbe27db13c24d812f72c5e6064898::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit181bbe27db13c24d812f72c5e6064898::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
