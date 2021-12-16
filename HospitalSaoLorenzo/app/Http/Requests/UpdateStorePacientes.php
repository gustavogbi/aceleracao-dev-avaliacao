<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStorePacientes extends FormRequest
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
            "nome" => "required|min:2|regex:/^[a-zA-ZÑñ\s]+$/",
            "sobrenome" => "required|min:2",
            "idade" => "required|numeric",
            "endereco" => "required|min:2",
            "telefone" => "required|min:8|numeric",
            "email" => "required|email",
        ];
    }

    public function messages() {
        return [
            "nome.required" => "O campo Nome é obrigatório",
            "nome.min" => "O campo Nome deve possuir no mínimo 2 caracteres",
            "nome.regex" => "O campo Nome não pode ser numérico",

            "sobrenome.required" => "O campo Sobrenome é obrigatório",
            "sobrenome.min" => "O campo Sobrenome deve possuir no mínimo 2 caracteres",

            "idade.required" => "O campo Idade é obrigatório",
            "idade.numeric" => "O campo Idade deve ser um número",
            
            "endereco.required" => "O campo Endereço é obrigatório",
            "endereco.min" => "O campo endereço deve possuir no mínimo 2 caracacteres",

            "telefone.required" => "O campo Telefone é obrigatório",
            "telefone.min" => "O campo telefone deve possuir no mínimo 8 caracteres",
            "telefone.numeric" => "O campo telefone deve conter apenas números",
            
            "email.required" => "O campo E-mail é obrigatório",
            "email.email" => "O campo E-mail deve ser um e-mail válido",
        ];
    }
}
