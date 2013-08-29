<?php

class CategoryComposer {

	public function compose($view)
	{
		$categories = Category::all();

		$view->with(compact('categories'));
	}

}