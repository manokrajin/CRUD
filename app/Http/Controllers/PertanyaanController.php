<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = PertanyaanModel::getAll();
        // dd($pertanyaan);
        return view('item.pertanyaan', compact('pertanyaan'));
    }

    public function create() {
        return view('item.form');
    }

    public function store(Request $request) {
        $data = $request->all();
        // dd($data);
        unset($data["_token"]);
        PertanyaanModel::save($data);
        $pertanyaan = PertanyaanModel::getAll();
        return view('item.pertanyaan', compact('pertanyaan'));
    }
}
