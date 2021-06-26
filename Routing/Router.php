<?php


namespace Scylla\Routing;


use Scylla\Http\Request;

class Router
{
    protected array $routes = [
        'get' => [],
        'post' => [],
    ];

    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $action)
    {
        $this->routes['get'][] = [
            'path' => $path,
            'action' => $action
        ];
    }

    public function post($path, $action)
    {
        $this->routes['post'][] = [
            'path' => $path,
            'action' => $action
        ];
    }

    public function compare()
    {
        $method = strtolower($this->request->getMethod());
    }
}