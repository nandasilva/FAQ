<?php

class Base_Controller extends Controller {

	public function __construct()
	{
		// Assets JS
		Asset::add('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
		Asset::add('bootstrap-js', 'js/bootstrap.min.js');

		// Assets CSS
		Asset::add('bootstrap-css', 'css/bootstrap.min.css');
		Asset::add('bootstrap-css-responsive', 'css/bootstrap-responsive.min.css', 'bootstrap-css');
		Asset::add('main', 'css/main.css', 'bootstrap-css');

		parent::__construct();
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}