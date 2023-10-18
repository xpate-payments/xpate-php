<?php

namespace Xpate\Tests;

use Xpate\ApiClient;
use Xpate\Xpate;

final class XpateTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_creates_a_client()
    {
        $this->assertInstanceOf(
            ApiClient::class,
            Xpate::createClient('https://www.example.com', 'abc123')
        );
    }
}
