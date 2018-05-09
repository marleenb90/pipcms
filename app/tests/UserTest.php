<?php
/**
 * Created by PhpStorm.
 * User: marleen
 * Date: 09/05/2018
 * Time: 21:31
 */

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testFillable()
    {
        $user = new User(['name' => 'username', 'email' => 'mail@mail.com', 'password' => 'supersecret']);
        $this->assertEquals('username', $user->name);
        $this->assertEquals('mail@mail.com', $user->email);
        $this->assertEquals('supersecret', $user->password);
    }
}
