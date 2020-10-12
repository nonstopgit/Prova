<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1e4938d9fc710f60c08482e8fa5a14c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Component\\Stopwatch\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'J' => 
        array (
            'Jaybizzle\\CrawlerDetect\\' => 24,
        ),
        'D' => 
        array (
            'Davaxi\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Jaybizzle\\CrawlerDetect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src',
        ),
        'Davaxi\\' => 
        array (
            0 => __DIR__ . '/..' . '/davaxi/sparkline/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1e4938d9fc710f60c08482e8fa5a14c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1e4938d9fc710f60c08482e8fa5a14c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
