<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd0ce07c2632e374b24bd1a4ca084aad
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd0ce07c2632e374b24bd1a4ca084aad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd0ce07c2632e374b24bd1a4ca084aad::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
