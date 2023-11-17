<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswaModel;
class base extends Controller
{
    public function show(){

        $post = siswaModel::all();
        $post = siswaModel::sortable()->get();

        return view('welcome',compact('post'));
    }
}
