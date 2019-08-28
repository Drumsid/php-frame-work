<?php 

/**
 * summary
 */
class Router
{
    /**
     * summary
     */
    // public function __construct()
    // {
    //     echo 'hello world';
    // }

    protected static $routes = [];
    protected static $route = [];

    public function add($regexp, $route = [])
    {
    	self::$routes[$regexp] = $route;
    }

    public function getRoutes()
    {
    	return self::$routes;
    }

    public function getRoute()
    {
    	return self::$route;
    }

    public function matchRoute($url)
    {
    	foreach (self::$routes as $pattern => $route) {
    		if ($url == $pattern) {
    			self::$route = $route;
    			return true;
    		}
    	}
    	return false;
    }
}

 ?>