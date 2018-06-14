<?php

require_once 'App.php';

class Page_Index extends App_Page
{
    public function onInject()
    {
        parent::onInject();
        $this->injectGet('name', 'name', 'World');
    }

    public function onInit(array $args)
    {
        $this->set('greeting', 'Hello ' . $args['name']);
    }

    public function onOutput()
    {
        $this->display('helloWorld.tpl');
    }
}

App_Main::run('Page_Index');
