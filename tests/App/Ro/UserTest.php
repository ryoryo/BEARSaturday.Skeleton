<?php

class App_Ro_Test_UserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var BEAR_Resource
     */
    public $resource;

    public function setUp()
    {
        $this->resource = BEAR::dependency('BEAR_Resource');
        parent::setUp();
    }

    public function testCode()
    {
        $params = [
            'uri' => 'Test/User',
            'values' => ['id' => 1],
            'options' => []
        ];
        $ro = $this->resource->read($params)->getRo();
        $this->assertSame(200, $ro->getCode());

        return $ro;
    }

    /**
     * @depends testCode
     */
    public function testReadBody(App_Ro $ro)
    {
        $body = $ro->getBody();
        $this->assertSame('BEAR', $body['name']);
    }
}
