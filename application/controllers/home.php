<?php

class Home_Controller extends Base_Controller
{

	public function action_index()
	{
		$problemas = Problema::all();

		return View::make('home.index')
				->with('problemas', $problemas);

	}
}