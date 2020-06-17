<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5155cd18a37601af650b2d255d8bd58d
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'ca985edd5c955f2a40fd4586825638bb' => __DIR__ . '/../..' . '/src/Cli.php',
        'c0a8729c0b2ab7d4fa676e3c7414852f' => __DIR__ . '/../..' . '/src/Tmp.php',
        'bd99da67000ec22aded900104a8a6ed0' => __DIR__ . '/../..' . '/src/games/GameEven.php',
        'd9940bb2f5ff94e4851f99904b6f846d' => __DIR__ . '/../..' . '/src/games/GameCalc.php',
        'd40625566b3a4034f372538e0a5348fc' => __DIR__ . '/../..' . '/src/games/GameGcd.php',
        '26b77e68329174c54551aae78cb5ecfc' => __DIR__ . '/../..' . '/src/games/GameProgression.php',
        '47dc2d0c08d716d3464eed8faf9232db' => __DIR__ . '/../..' . '/src/games/GamePrime.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5155cd18a37601af650b2d255d8bd58d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}