<?php

namespace App\Http\Controllers;

use App\Rules\WordsCount;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\Validator;

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
        // dd($_POST);
        $abc->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'interestings' => 'required',
            'country' => 'required',
            // 'bio' => 'required',
            'bio' => ['required', new WordsCount(5)],
        ]);

        dd( $abc->all() );
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(TestRequest $request)
    {
        // $request->validate([
        //     // 'name' => 'required|min:3|max:30',
        //     // 'name' => ['required', 'min:3', 'max:30'],
        //     'email' => ['required', 'ends_with:@gmail.com'],
        //     'password' => 'required'
        // ]);

        // $validator = Validator::make($request->all(), [
        //     'email' => ['required', 'ends_with:@gmail.com'],
        //     'password' => ['required']
        // ]);

        // $validator->after(function ($validator) {
        //     $validator->errors()->add(
        //         'email', 'خطا اضافي'
        //     );
        // });

        // if($validator->fails()) {
        //     return redirect()->back()->withErrors($validator);
        // }

        // 1. Request Validate
        // 2. Validator Class
        // 3. File Request

        dd( $request->all() );
    }

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_data(Request $request)
    {
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $name);
    }
}
