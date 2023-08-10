<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function testEmail()
    {
        $email = Validate::email('ricardogauto11@gmail.com');
        $this->assertTrue($email);
    }

    public function testUrl()
    {
        $url = Validate::url('https://google.com');
        $this->assertTrue($url);
    }
}