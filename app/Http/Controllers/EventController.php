<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $data = Event::all();
        return view('event', compact('data'));
    }

    public function add(Request $request) {
        $method = $request->method();

        if ($method == 'POST') {
            return $this->insertData($request);
        }

        return view('add-event');
    }

    private function insertData(Request $request) {
        $material = Event::create($request->all());
        $material->save();
        return redirect('/event')->with('success', 'Data berhasil ditambahkan');
    }
}
