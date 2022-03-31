<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit689f0d41affaf5d5ab620bb1bc835bd6
{
    public static $classMap = array (
        'App\\Controllers\\LocationsController' => __DIR__ . '/../..' . '/controllers/LocationsController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit689f0d41affaf5d5ab620bb1bc835bd6' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit689f0d41affaf5d5ab620bb1bc835bd6' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit689f0d41affaf5d5ab620bb1bc835bd6::$classMap;

        }, null, ClassLoader::class);
    }
}
