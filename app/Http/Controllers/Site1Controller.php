<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    public function index($name = null)
    {
        // return "Welcome $name";
        $age = 28;
        // return view('site1')->with('myname', $name)->with('myage', $age);
        // return view('site1', compact('name', 'age'));


        $users = [
            [
                'id' => 1,
                'name' => 'Mohammed',
                'phone' => 123456,
                'email' => 'moh@gmail.com'
            ],
            [
                'id' => 2,
                'name' => 'Ahmed',
                'phone' => 123456,
                'email' => 'ahmed@gmail.com'
            ],
            [
                'id' => 3,
                'name' => 'Sama',
                'phone' => 123456,
                'email' => 'sama@gmail.com'
            ],
            [
                'id' => 4,
                'name' => 'Zina',
                'phone' => 123456,
                'email' => 'zina@gmail.com'
            ]
        ];

        return view('site1', [
            'myname' => $name,
            'myage' => $age,
            'users' => $users
        ]);

        // compact('name', 'age')
        // [
        //     'name' => $name,
        //     'age' => $age
        // ]
    }
}
