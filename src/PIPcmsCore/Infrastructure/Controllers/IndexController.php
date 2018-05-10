<?php

namespace PIPcmsCore\Infrastructure\Controllers;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

}