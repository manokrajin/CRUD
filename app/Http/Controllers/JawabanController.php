<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    public function index($pertanyaan_id) {
        // dd($pertanyaan_id);
        $jawaban = JawabanModel::getAll();
        $pertanyaan = PertanyaanModel::getAll();
        return view('item.jawaban', compact('jawaban','pertanyaan','pertanyaan_id'));
    }

    public function store(Request $request,$pertanyaan_id) {
        $data = $request->all();
        unset($data["_token"]);
        $data['pertanyaan_id'] = $pertanyaan_id;
        JawabanModel::save($data);
        $jawaban = JawabanModel::getAll();
        $pertanyaan = PertanyaanModel::getAll();
        return view('item.jawaban', compact('jawaban','pertanyaan','pertanyaan_id'));
    }
}
