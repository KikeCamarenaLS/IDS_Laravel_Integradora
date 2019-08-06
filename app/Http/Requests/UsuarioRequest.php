<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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

            'mail' => 'required|email',
            'pass' => 'required|min:8',
            'nombre' =>'required',
            'apellido_p' => 'required',
            'apellido_m' => 'required',
            'fNacimiento' =>'required',
            'direccion' =>'required|',
            'telefono' =>'required|min:10',

        ];
    }
}
