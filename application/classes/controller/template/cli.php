<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Template_Cli extends Controller {

	public function before()
    {
        parent::before();
//	    if( !(Auth::instance()->logged_in() OR Kohana::$is_cli) ){
	    if( Auth::instance()->logged_in()==false AND Kohana::$is_cli==false ){
//	    if( !(Kohana::$is_cli) ){
		    echo "not a cli";
		    exit();
	    }
    }

	public function after()
	{
		parent::after();
	}
}