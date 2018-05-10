<?php

namespace PIPcmsCore\Infrastructure\Controllers;

use Illuminate\Routing\Controller;
use View;

class IndexController extends Controller
{
    public function index()
    {
        return View::make('welcome');
    }

}