<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFillable()
    {
        $author = new User(['name'=>'Karin Slaughter']);
        $this->assertEquals('Karin Slaughter', $author->name);
    }
}
