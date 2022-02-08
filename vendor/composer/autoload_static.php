<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda03dfb1f020b35f93c1e9a38df88eb0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Plasticbrain\\FlashMessages\\' => 27,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Plasticbrain\\FlashMessages\\' => 
        array (
            0 => __DIR__ . '/..' . '/plasticbrain/php-flash-messages/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda03dfb1f020b35f93c1e9a38df88eb0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda03dfb1f020b35f93c1e9a38df88eb0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda03dfb1f020b35f93c1e9a38df88eb0::$classMap;

        }, null, ClassLoader::class);
    }
}
