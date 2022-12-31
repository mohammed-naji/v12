<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('resume.index');
    }

    public function experience()
    {
        return view('resume.experience');
    }

    public function education()
    {
        return view('resume.education');
    }

    public function skills()
    {
        return view('resume.skills');
    }

    public function interests()
    {
        return view('resume.interests');
    }

    public function awards()
    {
        return view('resume.awards');
    }

}
