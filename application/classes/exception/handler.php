<?php
class Exception_Handler
{
    public static function handle(Exception $e)
    {
        if(!Auth::instance()->logged_in()){
	        //Request::instance()->redirect(URL::base());
	        Request::initial()->redirect();
//	        $response = new Response;
//	        $response->redirect(URL::base());
        }
	    switch (get_class($e))
        {
	        case 'HTTP_Exception_404':
                $response = new Response;
                $response->status(404);
                $view = new View('httperrors/404');
                $view->message = $e->getMessage();
                $view->title = '404';
                echo $response->body($view)->send_headers()->body();
                return TRUE;
                break;
            default:
                return Kohana_Exception::handler($e);
                break;
        }
    }
}
?>