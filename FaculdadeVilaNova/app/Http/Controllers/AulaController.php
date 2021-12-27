<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Http\Requests\StoreAulaRequest;
use App\Http\Requests\UpdateAulaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $view = 'aula';
    protected $route = 'aulas';

    public function index()
    {
        $cads = Aula::all();

        return view($this->view.'.index', compact('cads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAulaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAulaRequest $request)
    {
        $cad = Aula::create($request->all());

        return view($this->view.'.update', compact('cad'))->with('success', "Cadastrado efetivado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cad = Aula::find($id);

        if($cad)
        {
            return view($this->view.'.show', compact('cad'));
        }

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cad = Aula::find($id);

        if(!$cad):
            return redirect()->back();
        endif;

        return view($this->view.'.update', compact('cad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAulaRequest  $request
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAulaRequest $request, $id)
    {
        $cad = Aula::find($id);
        if(!$cad):
            return redirect()->back();
        endif;

        $cad->update($request->all());
        $id= $cad->id;
        return view($this->view.'.update', compact('cad'))->with('success', "Cadastrado efetivado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aula $aula)
    {
        //
    }
}
