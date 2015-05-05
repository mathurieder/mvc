<?php

class Dispatcher
{
	public static function dispatch()
	{
		$url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

		$controllerName = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'DefaultController';
		$method         = !empty($url[1]) ? $url[1] : 'index';

		require_once ("controller/$controllerName.php");
		$controller = new $controllerName();
		$controller->$method();
		unset($controller);
	}
}
