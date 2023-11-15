<?php

namespace App\Http\Controllers;

use App\Models\siswaModel;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|max:12|unique:siswa_models',
            'nama' => 'required|max:20',
            'alamat' => 'required|max:60',
            'kelurahan' => 'required|max:20',
            'kecamatan' => 'required|max:20',
            'kota' => 'required|max:20',
            'provinsi' => 'required|max:20'
        ],[
            'NIK.required' => 'NIK field is required',
            'NIK.max' => 'The NIK field must not be greater than 12 characters'
        ]);

        siswaModel::create($validatedData);

        $post = siswaModel::all();

        return redirect('/list');

    }

    /**
     * Display the specified resource.
     */
    public function show(siswaModel $siswaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = siswaModel::findOrFail($id);

        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'nama' => 'required|max:20',
            'alamat' => 'required|max:60',
            'kelurahan' => 'required|max:20',
            'kecamatan' => 'required|max:20',
            'kota' => 'required|max:20',
            'provinsi' => 'required|max:20'
        ]);

        $post = siswaModel::findOrFail($id);

        if($request->NIK != $post->NIK){
            $rules['NIK'] = 'required|max:12|unique:siswa_models';
        }

        $validatedData = $request->validate($rules);

        siswaModel::where('id',$post->id)->update($validatedData);
        return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswaModel $siswaModel,$id)
    {
        $post = siswaModel::findOrFail($id);

        $post->delete();

        return redirect('/list');
    }
}
