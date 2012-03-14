<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template_Default {

	public function action_index()
	{
		$this->template->title = "Новый Милитаризм";
		$this->template->main_view = "static/welcome";
		$this->template->main['var1'] = "var1";
	}

} // End Welcome
