<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCursoRequest extends FormRequest
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
            'nomedocurso' => 'required|min:4',
            'qntmax' => 'required|min:3|',
            'descricao' => 'required|min:4',
            'categoria' => 'required|min:4',
            'mensalidade' => 'required|min:4',
            'status' => 'required|min:4'
        ];
    }
    public function messages()
    {
        return [

            'nomedocurso.required' => 'O campo Curso não pode ser vazio',
            'nomedocurso.min' => 'O campo Curso não pode ter menos de 4 caracteres',

            'qntmax.required' => 'O campo Quant. Max. não pode ser vazio',
            'qntmax.min' => 'O campo Quant. Max não pode ter menos de 3 caracteres',

            'descricao.required' => 'O campo Descrição não pode ser vazio',
            'descricao.min' => 'O campo Descrição não pode ter menos de 4 caracteres',

            'categoria.required' => 'O campo Categoria não pode ser vazio',
            'categoria.min' => 'O campo Categoria não pode ter menos de 4 caracteres',

            'mensalidade.required' => 'O campo Mensalidade não pode ser vazio',
            'mensalidade.min' => 'O campo Mensalidade não pode ter menos de 4 caracteres',

            'status.required' => 'O campo Status não pode ser vazio',
            'status.min' => 'O campo Status não pode ter menos de 4 caracteres',

        ];
    }
}
