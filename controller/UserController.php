<?php

class UserController
{
	private $model = null;

	public function __construct()
	{
		$mysql = MySQL::getInstance(array('localhost', 'root', '', 'mvc'));
		$this->model = new Model($mysql, 'users');

		$view = new View('header', array('title' => 'Benutzer', 'heading' => 'Benutzer'));
		$view->display();
	}

	public function index()
	{
		$view = new View('user_index');
		$view->users = $this->model->fetchAll();
		$view->display();
	}

	public function create($id = null)
	{
		$data = array('user' => null);
		if ($id !== null) {
			$data['user'] = $this->model->find($id);
		}

		$view = new View('user_create', $data);
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

			$view = new View('user_save_success');
			$view->display();
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
