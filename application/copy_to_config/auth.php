<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'orm',
	'hash_method'  => 'sha256',
	'hash_key'     => 'whogks',
	'lifetime'     => Date::WEEK,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

);
