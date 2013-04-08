<?php

class Problema extends Eloquent
{
	public function tags()
	{
		return $this->has_many_and_belongs_to('Tag');
	}
}