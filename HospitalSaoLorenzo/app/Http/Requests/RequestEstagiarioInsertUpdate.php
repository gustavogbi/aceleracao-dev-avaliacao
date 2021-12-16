<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestEstagiarioInsertUpdate extends FormRequest
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
            'nome'=>'required|min:2|regex:/^[a-zA-Z]+$/u',
            'grauDeEscolaridade'=>'required|min:2',
            'telefone'=>'required|min:10|max:11',
            'email'=>'required|min:1|email'
        ];
    }

    public function messages()
    {
        return [


            'nome.required' => 'O campo NOME não pode ser vazio',
            'nome.min' => 'O campo NOME não pode ter menos de 2 caracteres',
            'nome.regex' => 'O campo NOME não pode ser numerico',

            
            'grauDeEscolaridade.required' => 'O campo GRAU DE ESCOLARIDADE não pode ser vazio',
            'grauDeEscolaridade.min' => 'O campo GRAU DE ESCOLARIDADE não pode ter menos de 2 caracteres',

            'telefone.required' => 'O campo TELEFONE não pode ser vazio',
            'telefone.min' => 'O campo TELEFONE não pode ter menos de 10 caracteres',
            'telefone.max' => 'O campo TELEFONE não pode ter mais de 11 caracteres',

            'email.required' => 'O campo EMAIL não pode ser vazio',
            'email.min' => 'O campo EMAIL não pode ter menos de 2 caracteres',
            'email.email' => 'O campo EMAIL deve ser um email valido',

        ];
    }
}
