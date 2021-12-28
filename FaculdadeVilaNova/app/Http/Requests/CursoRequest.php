<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            'nomedocurso' => 'required|max:45',
            'qntmax' => 'required|integer|max:2147483647',
            'descricao' => 'required|max:200',
            'categoria' => 'required|max:45',
            'mensalidade' => 'required|max:4',
            'status' => 'required|max:45'
        ];
    }
    public function messages()
    {
        return [

            'nomedocurso.required' => 'O campo Curso não pode ser vazio',
            'nomedocurso.max' => 'O campo Curso não pode ter mais de 45 caracteres',

            'qntmax.required' => 'O campo Quant. Max. não pode ser vazio',
            'qntmax.integer' => 'O campo Quant. Max. deve ser um número inteiro',
            'qntmax.max' => 'O campo Quant. Max não pode ter mais de 3 caracteres',

            'descricao.required' => 'O campo Descrição não pode ser vazio',
            'descricao.max' => 'O campo Descrição não pode ter mais de 200 caracteres',

            'categoria.required' => 'O campo Categoria não pode ser vazio',
            'categoria.max' => 'O campo Categoria não pode ter mais de 45 caracteres',

            'mensalidade.required' => 'O campo Mensalidade não pode ser vazio',
            'mensalidade.max' => 'O campo Mensalidade não pode ter mais de 4 caracteres',

            'status.required' => 'O campo Status não pode ser vazio',
            'status.max' => 'O campo Status não pode ter mais de 45 caracteres',

        ];
    }
}
