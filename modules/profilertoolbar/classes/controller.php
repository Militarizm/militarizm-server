<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller extends Kohana_Controller {

  public function after(){
    if(ProfilerToolbar::cfg('firebug.enabled') && ProfilerToolbar::cfg('firebug.showEverywhere')) {
      ProfilerToolbar::firebug();
    }
  }

}
