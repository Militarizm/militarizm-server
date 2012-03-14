<?php
class Controller extends Kohana_Controller {
    /**
     * @var auth property with instance of "Auth" module
     */
    public $auth = NULL;

    /**
     * @var user property with object of user
     */
    public $user = FALSE;
    
    public function before()
    {
        parent::before();

	    $this->auth = Auth::instance();

	    // Проверка на залогиненость или наличие пароля у api-запроса
	    /*
	    if($this->request->controller()!="auth" AND $this->request->controller()!="error" AND $this->request->controller()!="cron")
	    {
			$uri = $this->request->uri();
			if(strpos($uri,"/api")!==false){
				// Проверка на вызов api
				$query = $this->request->query();
				$pass = $query['pass'];
				$users = Kohana::$config->load("auth.users");
				$allow = false;
				foreach($users as $login=>$hash){
					if($pass==$hash) $allow = true;
				}
				if(!$allow AND !Auth::instance()->logged_in()){
					$this->request->redirect("error/apipass");
				}
			}else{
				// Проверка на доступ в систему
				if(!Auth::instance()->logged_in()){
					$this->request->redirect("auth/login");
				}
			}

			if(!CSRF::check($_POST)) $this->request->redirect("error/csrf");
		    unset($_POST['csrf-default']);
	    }
	    */
    }

	public function go_home($current_request_only = FALSE)
    {
        $url = Route::url('default', NULL, TRUE);

        $this->go($url, $current_request_only);
    }

    public function go_back($current_request_only = FALSE)
    {
        Validation::url(Request::$referrer) OR $this->go_home($current_request_only);
	    
        $this->go(Request::$referrer, $current_request_only);
    }

    private function go($url, $current_request_only)
    {
        $request = ($current_request_only) ? $this->request : Request::instance();
        $request->redirect($url);
    }
    
    public function after()
    {
        parent::after();
    }
}