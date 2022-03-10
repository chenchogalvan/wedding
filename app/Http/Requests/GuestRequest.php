<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestRequest extends FormRequest
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
            'name'  => 'required|max:255|min:3',
            'last_name'  => 'required|max:255|min:3',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'inviteds' => 'required|numeric'
        ];
    }

    public function attributes()
    {
        return [
            'name'  => 'nombre',
            'last_name'  => 'apellidos',
            'email' => 'correo',
            'phone' => 'teléfono'
        ];
    }
}
