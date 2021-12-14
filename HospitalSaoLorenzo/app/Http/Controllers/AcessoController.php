<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BancoSangue;

class AcessoController extends Controller
{
    public function index(){
        $bancodesangues = BancoSangue::count();
        return view('welcome', compact('bancodesangues'));
    }  
    
}
