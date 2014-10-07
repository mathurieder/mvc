<?php
require_once('lib/Model.php');
require_once('lib/View.php');

class UserController
{
	private $model = null;

	public function __construct()
	{
		$mysql = MySQL::getInstance(array('localhost', 'root', '', 'mvc'));
		$this->model = new Model($mysql, 'users');

		$view = new View('header', array('title' => 'Testtitle', 'heading' => 'Userseite'));
		$view->display();
	}

	public function index()
	{
		$view = new View('user_list');
		$view->users = $this->model->fetchAll();
		$view->display();
	}

	public function create($id = null)
	{
		$view = new View('user_form');
		$view->display();
	}

	public function save($id = null)
	{
		if ($_POST['send']) {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];

			if ($id !== null) {
				$this->model->update(array('fname' => $fname, 'lname' => $lname, 'email' => $email), (int) $id);

			} else {
				$this->model->insert(array('fname' => $fname, 'lname' => $lname, 'email' => $email));
			}
		}
	}

	public function delete($id)
	{
		$this->model->delete((int) $id);
	}

	public function __destruct(){
		$view = new View('footer');
		$view->display();
	}
}
