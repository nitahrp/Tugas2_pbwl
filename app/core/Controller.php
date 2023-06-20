<?php

namespace App\Core;

class Controller
{
	// Layout home
	public function guest($view, $data = [])
	{
		require_once ROOT . "layouts/guest.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}
	// layout pelanggan
	public function pelanggan($view, $data = [])
	{
		require_once ROOT . "layouts/pelanggan.php";
	}
	// layout Login
	public function login($view, $data = [])
	{
		require_once ROOT . "layouts/login.php";
	}
}
