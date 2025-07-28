<?php
namespace Core;
class Router {
    private $routes = [];
    public function get($path, $action) { $this->routes['GET'][$path] = $action; }
    public function post($path, $action) { $this->routes['POST'][$path] = $action; }
    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        if(isset($this->routes[$method][$uri])) {
            $this->callAction(...explode('@', $this->routes[$method][$uri]));
        } else { http_response_code(404); echo '404 Not Found'; }
    }
    private function callAction($controller, $action) {
        $controller = "App\\Controllers\\$controller";
        $obj = new $controller;
        $obj->$action();
    }
}