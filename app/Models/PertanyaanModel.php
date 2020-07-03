<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function getAll() {
        $all = DB::table('pertanyaan')->get();
        return $all;
    }

    public static function save($data) {
        $save = DB::table('pertanyaan')->insert($data);
        return $save;
    }
}
