<?php

class UserController
{
	public function __construct()
	{
		$view = new View('header', array('title' => 'Benutzer', 'heading' => 'Benutzer'));
		$view->display();
	}

	public function index()
	{
		$this->create();
	}

	public function create()
	{
		$view = new View('user_form');
		$view->display();
	}

	public function __destruct()
	{
    	$view = new View('footer');
    	$view->display();
    }
}
