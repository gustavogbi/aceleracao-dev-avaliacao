<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreBancoDeSangueRequest extends FormRequest
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
            'tipo'          => 'required|min:2|',
            'contabilidade'      => 'required|min:2|numeric',
        ];
    }

    public function messages()
    {
        return [
            'tipo.required' => 'O campo TIPO não pode ser vazio!',
            'tipo.min' => 'O campo TIPO não pode ser menor que 2!',

            'contabilidade.required' => 'O campo CONTABILIDADE não pode ser vazio!',
            'contabilidade.min' => 'O campo CONTABILIDADE não pode ser menor que 2! EX: 05',
            'contabilidade.numeric' => 'O campo CONTABILIDADE precisa ser numerico!'

        ];
    }
}
