<?php
use Illuminate\Routing\Route;
use rjapi\extension\BaseController;

class BaseControllerTest extends TestCase
{
    public function testConstruction()
    {
        $route = new Route(['foo'], '/v1/bar', ['index']);
        $obj = new BaseController($route);
    }
}