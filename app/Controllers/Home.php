<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('Admin/dashboard');
		return view('Auth/register');
	}
}