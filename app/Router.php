<?php

namespace App;
/**
 * class Router
 * 
 * @package \App
 */

class Router{

    protected $serverinfo;

    protected $requestedUrl = '/';

    protected static $routes = [];

    protected static $allowedHttpMethods = ['get', 'post', 'put', 'patch', 'delete'];


    public function __construct(){
        $this->serverinfo = $_SERVER;
    }


    private function getRequestedUrl(){

        $requestedUrl = isset($this->serverinfo['PATH_INFO']) ? $this->serverinfo['PATH_INFO'] : '/';

        $url = trim($requestedUrl, '/');

        if(!static::startsWith($url, '/')) {
            $url = '/'. $url;
        }
        
        return $url;
    }


    public function executeUrl(){

        $this->requestedUrl = $this->getRequestedUrl();

        $url = $this->getRequestedUrl();

        $reqMethod = strtolower($_SERVER['REQUEST_METHOD']);

        $foundRoute = null;

        foreach(static::$routes as $route){

            if(!static::startsWith($route['path'], '/')){
                $route['path'] = '/' .$route['path'];
            }

            if($route['path'] === $url && $route['method'] === $reqMethod){
                $foundRoute = $route;
                break;
            }
        }

        if($foundRoute){

            $parts = explode('@', $foundRoute['callback']);

            $controller = 'App\Controllers\\'.$parts[0];

            return call_user_func(array(new $controller, $parts[1]), array());

        }

        $controller = 'App\Controllers\NotFoundController';

        return call_user_func(array(new $controller, 'index', array()));
    }



    public static function startsWith($url, $char): bool {
        return substr($url, 0, 1) === $char;
    }


    public static function __callStatic($name, $arguments){
        if(in_array($name, static::$allowedHttpMethods)){
            static::addRoute($arguments[0], $arguments[1], $name);
            return;
        }

        throw new BadMethodCallExeception('Method not found'. $name);
    }


    protected static function addRoute($path, $callback, $method='get'){
        $found = false;

        foreach(static::$routes as $route){
            if($route['path'] === $path && $route['method'] === $method){
                $found = true;
                break;
            }
        }

        if(!$found){
            static::$routes[] = ['path'=>$path, 'callback'=>$callback, 'method'=>$method];
        }
    }


}
