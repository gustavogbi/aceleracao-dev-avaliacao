<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreDoadorRequest extends FormRequest
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
            'nome'          => 'required|min:2',
            'telefone'      => 'required|min:2',
            'email'         => 'required|email|min:2',
            'peso'          => 'required|min:2',
            'altura'        => 'required|min:2',
            'fumante'       => 'required|min:1',
            'doencas'       => 'required|min:1',
            'observacoes'   => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome não pode ser vazio',
            'nome.min' => 'O campo Nome não pode ser menor que 2',

            'telefone.required' => 'O campo Telefone não pode ser vazio',
            'telefone.min' => 'O campo Telefone não pode ser menor que 2',

            'email.required' => 'O campo E-mail não pode ser vazio',
            'email.min' => 'O campo E-mail não pode ser menor que 2',
            'email.email' => 'O campo E-mail deve ser um endereço de email válido.',

            'peso.required' => 'O campo Peso não pode ser vazio',
            'peso.min' => 'O campo Peso não pode ser menor que 2',

            'altura.required' => 'O campo Altura não pode ser vazio',
            'altura.min' => 'O campo Altura não pode ser menor que 2',

            'fumante.required' => 'O campo Fumante não pode ser vazio',
            'fumante.min' => 'O campo Fumante não pode ser menor que 2',

            'doencas.required' => 'O campo Doenças não pode ser vazio',
            'doencas.min' => 'O campo Doenças não pode ser menor que 2',

            'observacoes.required' => 'O campo Observações não pode ser vazio',
            'observacoes.min' => 'O campo Observações não pode ser menor que 2'
        ];
    }
}
