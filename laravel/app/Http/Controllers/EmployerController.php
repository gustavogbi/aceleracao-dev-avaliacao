<?php

namespace App\Http\Controllers;

use App\Models\Employer;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    function index()
    {
        $employers = Employer::all();
        return view('employer.index', compact('employers'));
    }
    public function show($id)
    {
        $employer = Employer::findOrFail($id);
        return view('employer.show', compact('employer'));
    }
}
