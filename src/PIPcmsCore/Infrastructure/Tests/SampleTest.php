<?php
/**
 * Created by PhpStorm.
 * User: marleen
 * Date: 09/05/2018
 * Time: 21:49
 */

namespace Infrastructure\Tests;

use PIPcmsCore\Infrastructure\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @var Sample
     */
    private $sample;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->sample = new Sample();
    }

    public function testHello()
    {
        $this->call('POST', '/', [
            // some fields..
        ]);
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
        $response = $this->client->getResponse();

        if (!isset($response->original) || !$response->original instanceof View) {
            return $this->assertTrue(false, 'The response was not a view.');
        }

        $this->assertEquals($viewName, $response->original->getName());
    }

}
