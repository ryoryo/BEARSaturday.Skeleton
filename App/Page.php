<?php

abstract class App_Page extends BEAR_Page
{
    /**
     * @var BEAR_Session
     */
    protected $_session;

    /**
     * @var BEAR_Resource
     */
    protected $_resource;

    public function onInject()
    {
        parent::onInject();
        //$this->_session = BEAR::dependency('BEAR_Session');
        $this->_resource = BEAR::dependency('BEAR_Resource');
    }

    public function onOutput()
    {
        $this->display();
    }

    public function onException(Exception $e)
    {
        try {
            throw $e;
        } catch (App_Session_Exception $e) {
            // セッションタイムアウト
            //            $this->display('/session/timeout.tpl');
            //            $this->end();
        }
    }

    public function onSessionTimeout()
    {
    }
}
