<?php
/**
 * Created by PhpStorm.
 * User: marleen
 * Date: 09/05/2018
 * Time: 21:49
 */

namespace Infrastructure\Tests;

use PIPcmsCore\Infrastructure\Controllers\IndexController;
use Tests\TestCase;
use View;

class IndexControllerTest extends TestCase
{
    /**
     * @var IndexController
     */
    private $controller;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->controller = new IndexController();
        parent::setUp();
    }

    public function testHello()
    {
        $this->call('GET', '/');
        $this->assertViewIs('welcome');
    }

    /**
     * Assert that the response view has a given name.
     *
     * @param  string $viewName
     * @return void
     */
    public function assertViewIs($viewName)
    {
        $response = $this->controller->index();

        $this->assertEquals($viewName, $response->getName());
    }

}
