<?php

use \Laravel\Lumen\Application;

class HttpHostTest extends PHPUnit_Framework_TestCase
{
    /**
     * Url Generator.
     * @var \Laravel\Lumen\Routing\UrlGenerator
     */
    protected $url;

    /**
     * Lumen Application.
     * 
     * @var Application
     */
    protected $app;

    /**
     * Setup the tests.
     */
    public function setUp()
    {
        parent::setUp();

        $this->app = $this->createApplication();
        $this->url = $this->app->make('url');
    }

    /**
     * Crete lumen application.
     * @return Application
     */
    public function createApplication()
    {
        return new Application();
    }

    /**
     * Changing the hostname and port.
     */
    public function testShouldChangeHostnameAndPort()
    {
        lumenUrlHost('localhost:8000');

        $this->assertEquals('http://localhost:8000', $this->url->to('/'));

        lumenUrlHost('localhost:80');

        $this->assertEquals('http://localhost:8000', $this->url->to('/'));
    }

    /**
     * Changing the hostname and port.
     */
    public function testShouldChangeHostnameAndPort2()
    {
        lumenUrlHost('localhost');

        $this->assertEquals('http://localhost', $this->url->to('/'));

        lumenUrlHost('localhost:8000');

        $this->assertEquals('http://localhost', $this->url->to('/'));
    }

    /**
     * Changing the hostname and port.
     */
    public function testShouldChangeHostnameAndPort3()
    {
        lumenUrlHost();

        $this->assertEquals('http://localhost', $this->url->to('/'));

        lumenUrlHost('localhost:8000');

        $this->assertEquals('http://localhost', $this->url->to('/'));
    }

    /**
     * Changing the hostname and port.
     */
    public function testShouldChangeHostnameAndPort4()
    {
        lumenUrlHost(['host' => 'example.com', 'port' => '8080']);

        $this->assertEquals('http://example.com:8080', $this->url->to('/'));

        lumenUrlHost('localhost:8000');

        $this->assertEquals('http://example.com:8080', $this->url->to('/'));
    }
}
