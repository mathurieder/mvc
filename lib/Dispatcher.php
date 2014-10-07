<?php 
class Dispatcher{
	public static function dispatch(){
		$url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
		
		$controller = !empty($url[0]) ? $url[0] . "Controller" : "DefaultController";
		$method 	= !empty($url[1]) ? $url[1] : 'index';
		
		require_once ('controller/'.$controller.'.php');
		$cont = new $controller;
		$cont->$method();
		unset($cont);
	}
}