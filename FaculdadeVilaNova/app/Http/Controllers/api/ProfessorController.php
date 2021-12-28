<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfessorRequest;
use App\Http\Resources\ProfessorResource;
use App\Http\Resources\ProfessorResourceCollection;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    private $model;

    public function __construct(Professor $model){
        $this->model = $model;
    }

    public function index(Request $request)
    {
        $professor = $this->model;

        if($request->has('fields')){
            $fields = $request->get('fields');
            $professor = $professor->selectRaw($fields);
        }

       return new ProfessorResourceCollection($professor->paginate(8));
    }
    
    public function store(ProfessorRequest $request)
    {
        $professor = Professor::create($request->all());
        return response()->json(['code'=>'200', "msg"=>'Professor inserido com sucesso']);
    }

    public function show($id)
    {
        $professor = Professor::findOrFail($id);
        if(!$professor){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        return new ProfessorResource($professor);
    }

    public function update(ProfessorRequest $request, $id)
    {
        $professor = Professor::findOrFail($id);
        if(!$professor){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $professor->update($professor->all());
        return response()->json(['code'=>'200', "msg"=>'Professor inserido com sucesso']);
    }

    public function destroy($id)
    {
        $professor = Professor::findOrFail($id);
        if(!$professor){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $professor->delete();
        return response()->json(["code"=>200,"msg"=>"documento removido com sucesso"]);
    }
}
