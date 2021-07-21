<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
	public function __construct()
	{
		//code here
	}
	public function register()
	{
		$data = [
			'judul'		=> 'Register'
		];
		return view('Auth\register', $data);
	}

	public function login()
	{
		// code here
	}
}