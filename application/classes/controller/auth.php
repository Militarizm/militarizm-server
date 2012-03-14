<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template_Default
{
	public function action_registration()
	{
		if($_POST){
			$user = ORM::factory('user');
			$user->values($_POST);
			try{
				$user->save();
			}
			catch(ORM_Validation_Exception $e)
			{
				$errors = $e->errors('validation');
			}
			if(!$errors){
				$login_role = new Model_Role(array('name' =>'login'));
				$user->add('roles',$login_role);
				Auth::instance()->login($_POST['username'], $_POST['password'], true);
				Request::initial()->redirect();
			}

		}
		$this->template->title = "Регистрация";
		$this->template->main_view = "auth/registration";
		$this->template->main['post'] = $_POST;
		$this->template->main['errors'] = $errors;
	}

	public function action_login()
	{
		if(Auth::instance()->logged_in()){
			$this->request->redirect("");
		}
		if($_POST){
			$uri = $this->request->post('uri');
			$login_success = $this->auth->login($this->request->post('username'), $this->request->post('password'), true);
			if(!$login_success){
				$errors[] = "Sorry, wrong username or password.";
			}else{
				$this->request->redirect($uri);
			}
		}
		$this->template->title = "Логин";
		$this->template->main_view = "auth/login";
		$this->template->main['errors'] = $errors;
		$this->template->main['post'] = $_POST;
	}

	public function action_logout()
	{
		Auth::instance()->logout();
		$this->request->redirect("");
	}

}