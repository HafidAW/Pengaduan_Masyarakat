<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdb2fe8f879f495434db7d97e391fa147
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

        spl_autoload_register(array('ComposerAutoloaderInitdb2fe8f879f495434db7d97e391fa147', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdb2fe8f879f495434db7d97e391fa147', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdb2fe8f879f495434db7d97e391fa147::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}