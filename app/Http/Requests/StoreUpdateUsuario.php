<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUsuario extends FormRequest
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
            'nome' => 'required|min:3|max:150',
            'endereco' => 'required|min:3|max:255',
            'tipo' => 'required|in:0,1',
            'documento' => 'required|min:11|max:14|regex:/^[0-9]+$/',
            'email' => 'required|min:3|max:100|not_regex:/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i',
            'telefone' => 'required|min:8|max:20|regex:/^[0-9]+$/'
        ];
    }
}
