<?php

namespace App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class itemModel {
    public static function get_all(){
        $items = DB::table('items')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::table('items')->insert($data);
        return $new_item;
    }
}
