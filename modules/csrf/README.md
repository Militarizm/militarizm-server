K3-CSRF Module
==============

A Ko3 Module by [**John Hobbs**](http://twitter.com/jmhobbs) of
**[Little Filament, Inc.](http://littlefilament.com)**

Introduction
------------

This module provides easy CSRF protection with Kohana 3.1.x.

It is inspired by <https://github.com/synapsestudios/kohana-csrf/>

Installation
------------

K3-CSRF is a simple, standard module.

1. Drop the source in your MODPATH folder.
2. Add the module to Kohana::modules in your bootstrap.php
3. Either use the CSRF_Form in your views, or drop a form.php into APPATH/classes/ and extend CSRF_Form.

Usage
-----

Using CSRF_Form will inject a hidden form element after your form open tag. In this element is a randomly generated key which is also stored in the current session.

Open your form:

    echo CSRF_Form::open()

On the controller processing code, check the response:

	$csrf_ok = CSRF::check( $_POST );
