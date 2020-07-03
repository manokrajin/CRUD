<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function getAll() {
        $all = DB::table('jawaban')->get();
        return $all;
    }

    public static function save($data) {
        $save = DB::table('jawaban')->insert($data);
        return $save;
    }

}
