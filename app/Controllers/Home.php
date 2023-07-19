<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Home',
			'isi'     => 'v_home',
		];
		echo view('layout/users/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

}
