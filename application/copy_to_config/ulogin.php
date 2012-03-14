<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	// Возможные значения: small, panel, window
	'type' 			=> 'window',
	
	// на какой адрес придёт POST-запрос от uLogin
	'redirect_uri' 	=>	NULL,
	
	// Сервисы, выводимые сразу
	'providers'		=> array(
		'vkontakte',
		'facebook',
		'twitter',
		'google',
	),
	
	// Выводимые при наведении
	'hidden' 		=> array(
		'odnoklassniki',
		'mailru',
		'livejournal',
		'openid'
	),
	
	// Эти поля используются для поля username в таблице users
	'username' 		=> array (
		'username'
	),
	
	// Обязательные поля
	'fields' 		=> array(
		'username',
		'email',
	),
	
	// Необязательные поля
	'optional'		=> array(),
);
