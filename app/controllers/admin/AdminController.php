<?php
namespace Admin;

class AdminController extends \BaseController
{
	public function getIndex()
	{
		echo 'hello from admin controller!';
	}

	public function getTeste()
	{
		echo 'testing from admin controller';
	}

}