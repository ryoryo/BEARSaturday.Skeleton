<?php


/**
 * App root path
 */
define('_BEAR_APP_HOME', realpath(__DIR__));

// composer auto load
require_once __DIR__ . '/vendor/autoload.php';

$bearMode = isset($_SERVER['bearmode']) ? $_SERVER['bearmode'] : 0;
// profile
//include 'BEAR/Dev/Profile/script/startxh.php'; //xhprof

App::init($bearMode);

class App
{
    /**
     * @param int $bearMode
     */
    public static function init($bearMode = 1)
    {
        $app = BEAR::loadConfig(__DIR__ . '/App/app.yml');
        switch ($bearMode) {
            case 1:
                //debug mode (cache disabled)
                $app['BEAR_Cache']['adapter'] = 0;
                // no break
            case 2:
                //debug mode (cache enabled)
                $app['core']['debug'] = true;
                $app['App_Db']['dsn']['default'] = $app['App_Db']['dsn']['slave'] = $app['App_Db']['dsn']['test'];
                $app['BEAR_Ro_Prototype']['__class'] = 'BEAR_Ro_Prototype_Debug';
                break;
            case 100:
                // for UNIT test or HTTP access test
                $app['core']['debug'] = false;
                $app['App_Db']['dsn']['default'] = $app['App_Db']['dsn']['slave'] = $app['App_Db']['dsn']['test'];
                $app['BEAR_Resource_Request']['__class'] = 'BEAR_Resource_Request_Test';
                break;
            case 0:
            default:
                // live
                $app['core']['debug'] = false;
                break;
        }
        BEAR::init($app);
    }
}
