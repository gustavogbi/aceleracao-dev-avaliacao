<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestMedicoInsertUpdate extends FormRequest
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
            'CRM'=>'required|min:2',
            'nome'=>'required|min:2|regex:/^[a-zA-ZÑñ\s]+$/',
            'areaDeAtuacao'=>'required|min:2',
            'idade'=>'required|min:2',
            'telefone'=>'required|min:10|max:11',
            'email'=>'required|min:1|email'
        ];
    }

    public function messages()
    {
        return [

            'CRM.required' => 'O campo CRM não pode ser vazio',
            'CRM.min' => 'O campo CRM não pode ter menos de 2 caracteres',

            'nome.required' => 'O campo Nome não pode ser vazio',
            'nome.min' => 'O campo Nome não pode ter menos de 2 caracteres',
            'nome.regex' => 'O campo Nome não pode ser numerico',

            
            'areaDeAtuacao.required' => 'O campo Area De Atuacao não pode ser vazio',
            'areaDeAtuacao.min' => 'O campo Area De Atuacao não pode ter menos de 2 caracteres',
            
            'idade.required' => 'O campo Idade De Atuacao não pode ser vazio',
            'idade.min' => 'O campo Idade De Atuacao não pode ter menos de 2 caracteres',

            'telefone.required' => 'O campo Telefone não pode ser vazio',
            'telefone.min' => 'O campo Telefone não pode ter menos de 10 caracteres',
            'telefone.max' => 'O campo Telefone não pode ter mais de 11 caracteres',

            'email.required' => 'O campo Email não pode ser vazio',
            'email.min' => 'O campo Email não pode ter menos de 2 caracteres',
            'email.email' => 'O campo Email deve ser um email valido',

        ];
    }
}
