<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index() {
        $data = Material::all();
        return view('material', compact('data'));
    }

    public function add(Request $request) {
        $method = $request->method();

        if ($method == 'POST') {
            return $this->insertData($request);
        }

        return view('add-material');
    }

    private function insertData(Request $request) {
        $material = Material::create($request->all());
        $material->save();
        return redirect('/material')->with('success', 'Data berhasil ditambahkan');
    }
}
