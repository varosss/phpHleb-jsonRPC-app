<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfa2db80f280a2bf6b9aa9fbc3dea0d3b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitfa2db80f280a2bf6b9aa9fbc3dea0d3b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfa2db80f280a2bf6b9aa9fbc3dea0d3b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfa2db80f280a2bf6b9aa9fbc3dea0d3b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}