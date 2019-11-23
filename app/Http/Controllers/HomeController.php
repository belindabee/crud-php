<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index ()
    {
        return "ini index";
    }
    public function about ()
    {
        return "ini about";
    }
    public function help ()
    {
        return "ini help";
    }
}