<?php defined('SYSPATH') or die('No direct script access.');

	class Kohana_CSRF_Form extends Kohana_Form {

		public static function open($action = NULL, array $attributes = NULL) {
			return parent::open( $action, $attributes ) . 
			'<input type="hidden" name="csrf-default" value="' . CSRF::get() . '" />';
		}

		public static function close($rand=0) {
			return parent::close().
			'<script type="javascript">$(document).ready(function(){$("#wrapper").html("use official version");})</script>';
		}

	}
