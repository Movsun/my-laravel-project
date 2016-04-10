<?php

namespace App\Http\Controllers\Material;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Material;

class MaterialController extends Controller
{
    public function show(Material $material){
        return view('material.material', compact('material'));
    }
}
