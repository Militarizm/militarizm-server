<?php defined('SYSPATH') or die('No direct script access.');

	// Inspiration from https://github.com/synapsestudios/kohana-csrf/blob/develop/classes/csrf.php
	class Kohana_CSRF {

		public static function get ( $name = 'default', $force_create=true ) {
			$token = Session::instance()->get( 'csrf-' . $name );
			if( ! $token AND $force_create) {
				$token = Text::random( 'alnum', rand( 20, 30 ) );
				Session::instance()->set( 'csrf-' . $name, $token );
			}
			return $token;
		}

		public static function clear ( $name = 'default' ) {
			Session::instance()->delete( 'csrf-' . $name );
		}

		public static function check ( &$values, $name = 'default', $purge = true ) {
			if(count($values)==0) return true;

			$token = self::get($name, false);
			if( $purge ) { self::clear($name); }
			if(!$token) return true;

			$is_equal_to_session = $values['csrf-'.$name] === $token;
			unset($values['csrf-'.$name]);
			return $is_equal_to_session;
		}

	}
