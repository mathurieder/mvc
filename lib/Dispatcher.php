<?php
class Dispatcher
{
    public static function dispatch()
    {
    	$url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    	
        $controller = 	!empty($url[0]) ? $url[0] . 'Controller' : 'DefaultController';
        $method 	= 	!empty($url[1]) ? $url[1] : 'index';
        $arg1 		= 	!empty($url[2]) ? $url[2] : null;
		$arg2 		= 	!empty($url[3]) ? $url[3] : null;        

        require_once('controller/'.$controller.'.php');
		$cont = new $controller;
        $cont->$method($arg1,$arg2);
        unset($cont);
    }
}