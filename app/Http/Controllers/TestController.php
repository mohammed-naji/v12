<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return 'index page';
    }

    public function contact()
    {
        return 'contact page';
    }

    public function team()
    {
        return 'team page';
    }

    public function services($id)
    {
        return 'services page ' . $id;
    }

    public function about()
    {
        return 'about page';
    }
}
