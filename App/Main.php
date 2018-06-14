<?php

class App_Main extends BEAR_Main
{
    public function onInject()
    {
        parent::onInject();
    }

    /**
     * Inject multi UA
     */
    public function onInjectUA()
    {
        // UA Sniffing
        BEAR_Main_Ua_Injector::inject($this, $this->_config);
        parent::onInject();
    }
}
