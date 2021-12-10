<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    function index(){
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    function show($id)
    {   
        $item = Item::findOrFail($id);
        return view('item.show', compact('item'));
    }
}
