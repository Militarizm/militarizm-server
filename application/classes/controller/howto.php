<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Howto extends Controller_Template_Default {

	public function action_index()
	{
		$this->template->title = "Как тут играть - Militarizm";
		$this->template->main_view = "static/howto";
		$this->template->sidebar['sidebar_menu'] = "howto";
	}

}