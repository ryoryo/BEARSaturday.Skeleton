<?php

class App_Resource_Execute_App extends BEAR_Resource_Execute_Adapter
{
    /**
     * Constructor
     *
     * @param array $config
     *
     * @config string  'method' アクセスメソッド
     * @config string  'uri'    URI
     * @config array   'values' パラメータ
     * @config array   'optins' オプション
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * リソースアクセス
     *
     * @throws BEAR_Resource_Exception 読めなかった時の例外
     *
     * @return mixed
     */
    public function request()
    {
        // read only
        if ($this->_config['method'] === BEAR_Resource::METHOD_READ) {
            $file = str_replace('app:/', '', $this->_config['uri']);
            $result = file_get_contents($file);
        } else {
            $config = ['info' => compact('method'), 'code' => 400];
            throw new BEAR_Resource_Exception('Method not allowed', $config);
        }

        return $result;
    }
}
