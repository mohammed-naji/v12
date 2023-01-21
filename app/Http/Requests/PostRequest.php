<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // dd($this->method());

        $rule = 'required|image|mimes:png,jpeg,jpg,svg';
        if($this->method() == 'PUT') {
            $rule = 'nullable|image|mimes:png,jpeg,jpg,svg';
        }

        return [
            'title' => 'required',
            'image' => $rule,
            'content' => 'required|min:10'
        ];
    }
}
