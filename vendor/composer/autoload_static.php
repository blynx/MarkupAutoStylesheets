<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb358f88838c7fa29dd93de3185b1b1db
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Stylus' => 
            array (
                0 => __DIR__ . '/..' . '/neemzy/stylus/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitb358f88838c7fa29dd93de3185b1b1db::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
