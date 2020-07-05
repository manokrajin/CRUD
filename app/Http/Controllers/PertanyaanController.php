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
    public function show($id) {
        // dd($id);
        $pertanyaan = PertanyaanModel::findById($id);
        // dd($pertanyaan);
        $jawaban = JawabanModel::findQuestionById($id);
        return view('Tugas14.show', compact('pertanyaan','jawaban'));
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::findById($id);
        // dd($pertanyaan);
        return view('Tugas14.edit',compact('pertanyaan'));
    }

    public function update($id,Request $request) {
        $pertanyaan = PertanyaanModel::update($id,$request->all());
        return redirect("/pertanyaan");
    }

    public function drop($id) {
        $drop = PertanyaanModel::drop($id);
        $dropJawaban = JawabanModel::drop($id);
        return redirect("/pertanyaan");
    }
}
