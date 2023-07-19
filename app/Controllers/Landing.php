<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;

class Landing extends BaseController
{
    public function index()
    {
        echo view('landing/v_landing');
    }

    //--------------------------------------------------------------------

}
