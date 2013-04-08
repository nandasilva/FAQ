<?php

class Home_Controller extends Base_Controller
{

	public function action_index()
	{
		$tags = Problema::find(1)->tags;
		$problemas = Problema::all();

		return View::make('home.index')
				->with('tags', $tags)
				->with('problemas', $problemas);

	}
}