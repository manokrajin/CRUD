<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemModel;


class itemController extends Controller
{
    //
    public function index(){
        $items = itemModel::get_all();
        return view('item.index', compact('items'));

    }
    public function create() {
        return view('item.form');
    }
    public function store(Request $request){
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $items = itemModel::save($data);
    }
}
