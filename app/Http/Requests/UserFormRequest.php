<?php

namespace App\Http\Requests; 

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
        'name' => 'required|max:255',
        'apellido' => 'required|max:255',
        'email' => 'email|max:255|unique:users',
        'rol'=>'required',
        'dni'=>'required|max:15',
        'telefono'=>'required|max:15',
        'password' => 'required|min:6|confirmed',
        'imagen' =>'mimes:jpg,bnp,png',
        ];
    }
}
