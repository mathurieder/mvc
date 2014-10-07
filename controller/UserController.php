<?php
require_once('lib/View.php');

class UserController{
	public function __construct(){
		$out = new View('header', array('title' => 'Seitentitel', 'heading' => 'Userseite'));
		$out->display();
	}
	
	public function index(){
		$this->create();
	}
	
	public function create(){
		$view = new View('user_form');
		$view->display();
	}
	
	public function __destruct(){
    	$out = new View('footer');
    	$out->display();
    }
}