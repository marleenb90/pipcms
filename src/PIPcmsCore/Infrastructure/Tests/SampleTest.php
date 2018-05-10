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
        $this->assertEquals('hello', $this->sample->hello());
    }

}
