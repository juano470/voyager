<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if ($this->isMethod('Put')) {
            return [
            'name' => 'required',
            'email'=> 'required',
            'role' => 'required',
        ];
        }else{
        return [
            'name' => 'required',
            'email'=> 'required',
            'password'=> 'required|min:3',
            'role' => 'required',
            'image' => 'required|image'
            ];
            }
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'El campo nombre completo es requerido',
    //         'email.required'=> 'El campo email es requerido',
    //         'password.required'=> 'El campo password es requerido',
    //         'password.min'=> 'El campo password debe tener al menos 3 caracteres',
    //         'role.required' => 'El campo Rol es requerido',
    //         'image.required' => 'El campo foto es requerido'
    //     ];
    // }
}
