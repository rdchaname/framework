<?php


namespace Scylla\Application;


use Scylla\Http\Request;
use Scylla\Routing\Router;

class Application
{

    public Request $request;
    public Router $router;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->compare();
    }
}