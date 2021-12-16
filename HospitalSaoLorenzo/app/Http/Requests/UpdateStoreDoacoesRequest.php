<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreDoacoesRequest extends FormRequest
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
            'nome'          => 'required|min:2|regex:/^[a-zA-Z]+$/u',
            'telefone'      => 'required|min:2|numeric',
            'email'         => 'required|email|min:2',
            'qtd_litros'          => 'required|min:2|numeric',   
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome não pode ser vazio',
            'nome.regex' => 'O campo Nome não pode ser numérico',
            'nome.min' => 'O campo Nome não pode ser menor que 2',

            'telefone.required' => 'O campo Telefone não pode ser vazio',
            'telefone.min' => 'O campo Telefone não pode ser menor que 2',

            'email.required' => 'O campo Email não pode ser vazio',
            'email.min' => 'O campo Email não pode ser menor que 2',
            'email.email' => 'O campo Email esta inválido',
            
            'qtd_litros.required' => 'O campo QUANTIDADE DE LITROS não pode ser vazio',
            'qtd_litros.min' => 'O campo QUANTIDADE DE LITROS não pode ser menor que 2',
            'qtd_litros.numeric' => 'O campo QUANTIDADE DE LITROS tem que ser numérico',
        ];
    }
}
