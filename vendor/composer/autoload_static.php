<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5006eefb60a47846b5fab4c018d3e542
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Keneil\\QuickContact\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Keneil\\QuickContact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5006eefb60a47846b5fab4c018d3e542::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5006eefb60a47846b5fab4c018d3e542::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5006eefb60a47846b5fab4c018d3e542::$classMap;

        }, null, ClassLoader::class);
    }
}
