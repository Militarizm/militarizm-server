<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Template_Cron extends Controller_Template_Cli {

	public $time_start = 0;
	public $thread_id = 0;

	public function before()
    {
        parent::before();
	    $uri = $this->request->uri();
	    $max_execution_time = $this->request->param("id");
	    if(!$max_execution_time) $max_execution_time = 1800; // 30 минут лимит времени
		$this->time_start = time();
	    if($uri){
	        $this->thread_id = MDScron::register_thread($uri, $max_execution_time);
	    }

    }

	public function after()
	{
		parent::after();
		$execution_time = time() - $this->time_start;
		MDScron::unregister_thread($this->thread_id, $execution_time);
	}

	public function max_execution_time($time)
	{
		$time_expired = time() + $time;
		DB::update('cron_threads')->set(array('max_execution_time' => $time, 'time_expired'=>$time_expired))->where('thread_id', '=', $this->thread_id)->execute();
	}

}