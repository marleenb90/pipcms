<?php

namespace Tests\Unit;

use App\Author;
use Tests\TestCase;

class AuthorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFillable()
    {
        $author = new Author(['name'=>'Karin Slaughter']);
        $this->assertEquals('Karin Slaughter', $author->name);
    }
}
