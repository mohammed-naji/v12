<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd( $request->all() );
        // dd( $request->except('_token') );
        // dd( $request->only('age', 'age2') );
        // $accept = $request->input('accept', 0);
        // $accept = $request->post('accept', 0);

        // request('name');
        // request()->name;

        $name = $request->name;
        $age = $request->age;

        return "Welcome $name, your age is $age";
    }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $abc)
    {
        dd( $abc->all() );
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|ends_with:@gmail.com',
            'password' => 'required|confirmed'
        ]);

        dd( $request->all() );
    }
}
