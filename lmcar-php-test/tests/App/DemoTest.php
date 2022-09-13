<?php

namespace Test\App;

use PHPUnit\Framework\TestCase;
use App\App\Demo;
use App\Service\AppLogger;
use App\Util\HttpRequest;


class DemoTest extends TestCase
{

    public function test_foo()
    {
        $req = new HttpRequest();
        $logger = new AppLogger('think-log');
        $demo = new Demo($logger,$req);
        $demo->foo();
    }

    public function test_get_user_info()
    {
        $req = new HttpRequest();
        $logger = new AppLogger('think-log');
        $demo = new Demo($logger,$req);
        $demo->get_user_info();
    }
}
