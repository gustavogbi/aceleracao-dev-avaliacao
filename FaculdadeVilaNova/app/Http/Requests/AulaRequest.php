<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AulaRequest extends FormRequest
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
            'num_aula'  => 'required|integer|between:1,40',
            'tema' => 'required|min:5|max:45',
            'duracao'   => 'required|min:5|max:45',
            'observacao'    => 'required|min:5|max:255',
            'idcurso' => 'required|integer|between:1,8',
            'idprofessor' => 'required|integer|between:1,10',
        ];
    }

    public function messages()
    {
        return [
            'num_aula.required' => 'O campo Numero de Aula não pode ser vázio',
            'num_aula.between' => 'É necessário colocar o numero de aulas',

            'tema.required' => 'O campo Tema não pode ser vázio',
            'tema.min' => 'O campo Tema não pode conter menos que 5 caracteres',
            'tema.max' => 'O campo Tema não pode conter mais que 45 caracteres',

            'duracao.required' => 'O campo duração não pode ser vázio',
            'duracao.min' => 'O campo Duração não pode conter menos que 5 caracteres',
            'duracao.max' => 'O campo Duração não pode conter mais que 45 caracteres',

            'observacao.required' => 'O campo Observação não pode ser vázio',
            'observacao.min' => 'O campo Obserbavação não pode conter menos que 5 caracteres',
            'observacao.max' => 'O campo Obserbavação não pode conter mais que 45 caracteres',

            'idcurso.required' => 'É necessário selecionar um curso',

            'idprofessor.required' => 'É necessário seleconar um professor',
        ];
    }
}