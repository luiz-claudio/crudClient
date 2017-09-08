<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clienteRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required',
            'logradouro'=>'required',
            'complemento'=>'required',
            'bairro'=>'required',
            'localidade'=>'required',
            'uf'=>'required',
            'numero'=>'required',
            'telefone'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'required' => 'Preencha o :attribute',

];
}
}
