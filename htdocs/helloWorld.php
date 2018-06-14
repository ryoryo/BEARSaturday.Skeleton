<?php

require_once 'App.php';

/**
 * Hello World
 *
 *
 * @license    @license@ http://@license_url@
 *
 * @link       http://@link_url@
 */
class Page_HelloWorld extends App_Page
{
    /**
     * Inject
     */
    public function onInject()
    {
    }

    /**
     * Init
     *
     * @param array $args
     */
    public function onInit(array $args)
    {
        $this->set('greeting', 'hello world');
    }

    /**
     * Output
     */
    public function onOutput()
    {
        $this->display('helloWorld.tpl');
    }
}

App_Main::run('Page_HelloWorld');
