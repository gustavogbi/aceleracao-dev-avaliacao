<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;
use LaravelLegends\PtBrValidator\Rules\FormatoCpf;

class AlunoRequest extends FormRequest
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
            'nome'          => 'required|min:3|',
            'matricula'      => 'required|min:2|numeric',   
            'cpf'          => 'required|min:11|cpf',
            'datanascimento'          => 'required|date|before:today-15.|after:'.(date('01/01/1900')),
        ];
    }

    public function messages()
    {
        
       
        return [
            'nome.required' => 'O campo NOME não pode ser vazio!',
            'nome.min' => 'O campo NOME não pode ser menor que 3 caracteres!',

            'datanascimento.before' => 'O Aluno precisa ter mais de 15 anos!',
            'datanascimento.after' => 'Data de nascimento apartir de 1900!',
            'datanascimento.date' => 'Data de nascimento inválida!',
            'datanascimento.require' => 'Data de nascimento não pode ser vazio!',

            'cpf.cpf' => 'O CPF informado é inválido!',
            'cpf.min' => 'O campo CPF precisa ter pelo menos 11 caractéres!',
            'cpf.formato_cpf' => 'O campo CPF deve estar no formato "999.999.999-99" !',
            'cpf.required' => 'O campo CPF não pode ser vazio!',

            'datanascimento.required' => 'O campo DATA DE NASCIMENTO não pode ser vazio!',
            'datanascimento.date_format' => 'O campo DATA DE NASCIMENTO deve estar no formato "DD/MM/AAAA !',

            'matricula.required' => 'O campo MATRICULA não pode ser vazio!',
            'matricula.min' => 'O campo MATRICULA não pode ser menor que 2! EX: 05',
            'matricula.numeric' => 'O campo MATRICULA precisa ser numerico!'

        ];
    }
}
