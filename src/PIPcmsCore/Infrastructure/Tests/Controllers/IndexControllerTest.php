<?php

namespace src\PIPcmsCore\Infrastructure\Tests\Controllers;

use PIPcmsCore\Infrastructure\Controllers\IndexController;
use PHPUnit\Framework\TestCase;

class IndexControllerTest extends TestCase
{
    /**
     * @var IndexController
     */
    private $controller;

    protected function setUp()
    {
        $this->controller = new IndexController();
    }

    public function testIndex()
    {
        self::assertEquals('hello', $this->controller->index());
    }

}
