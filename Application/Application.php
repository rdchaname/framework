<?php


namespace Scylla\Application;


use Scylla\Http\Request;

class Application
{

    public Request $request;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
    }
}