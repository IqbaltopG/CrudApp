<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswaModel;
class base extends Controller
{
    public function show(){

        $post = siswaModel::all();


        return view('welcome')->with('siswa_models' , $post);
    }
}
