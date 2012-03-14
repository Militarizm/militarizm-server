<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Template_Default extends Kohana_Controller_Template
{
	// Конфиг
	public $folder = "_layouts"; // Папка во views, где лежит контейнер и блоки
	public $layout = "bootstrap"; // лайаут (скин), который используем
	public $file = "container"; // главный файл, который собирает все блоки (хедер, футер и т.п.)
	public $default_viewer = "view_response"; // если явно не указан вьювер, выводить этот

	public $template = ""; // служебная переменная
	public $auth; 

	// Auth
//	public $auth = NULL;
//	public $user = FALSE;

	public function before()
	{
		$this->template = "{$this->folder}/{$this->layout}/{$this->file}";

		parent::before();

		if(!CSRF::check($_POST)) $this->request->redirect("error/csrf");
		unset($_POST['csrf-default']);


		if($this->auto_render)
		{
			// Инициализируем переменные

			$this->template->title              = '';
			$this->template->meta_keywords      = '';
			$this->template->meta_description   = '';
			// css и javascript
			$this->template->styles             = array();
			$this->template->scripts            = array();

			// Переменные, которые будут передаваться блокам (хедеру, футеру) для отображения
			$this->template->header             = array();
			$this->template->footer             = array();
			$this->template->sidebar            = array();

			$this->template->main_view          = 'response'; // название вьювера, который показываем
			$this->template->main               = array();

			// Контент для формирования
			$this->template->header_content     = '';
			$this->template->sidebar_content    = '';
			$this->template->content            = '';
			$this->template->main_content       = '';
			$this->template->footer_content     = '';

			// Auth
//			$this->auth = Auth::instance();
//            $this->user = $this->auth->get_user();


		}
	}

	public function after()
	{
		if($this->auto_render)
		{
			$styles = array(
			"assets/css/{$this->layout}/layout.css" => 'screen',
			"assets/css/{$this->layout}/style.css" => 'screen',
			);

			$scripts = array(
				'assets/js/functions.js',
				'assets/js/jquery-1.5.min.js',
				'assets/js/flot/jquery.flot.min.js',
			);

			$this->template->styles  = array_merge($this->template->styles, $styles);
			$this->template->scripts = array_merge($this->template->scripts, $scripts);

			$this->template->header_content = View::factory("{$this->folder}/{$this->layout}/header", $this->template->header)->render();
			$this->template->sidebar_content = View::factory("{$this->folder}/{$this->layout}/sidebar", $this->template->sidebar)->render();
			if($this->template->content) $this->template->main_content = $this->template->content;
			else $this->template->main_content = View::factory($this->template->main_view, $this->template->main)->render();
			$this->template->main_content = View::factory($this->template->main_view, $this->template->main)->render();
			$this->template->footer_content = View::factory("{$this->folder}/{$this->layout}/footer", $this->template->footer)->render();

			parent::after();
		}

	}


}