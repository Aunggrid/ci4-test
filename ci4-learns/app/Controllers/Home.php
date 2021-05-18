<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}
	public function page21()
	{
		
		return view('page21.php');
	}
}
