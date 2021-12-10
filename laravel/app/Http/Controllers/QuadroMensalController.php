<?php

namespace App\Http\Controllers;

use App\Models\QuadroMensal;

class QuadroMensalController extends Controller
{
    public function index()
    {
        $quadrosMensal = QuadroMensal::all();
        return view('quadromensal.index', compact('quadrosMensal'));
    }
}
