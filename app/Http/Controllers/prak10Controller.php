<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produks;

class prak10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data dari table produks
        $data = produks::get();
        $jum = produks::count();
        return view ('prak10.tugas1', compact ('data','jum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan form untk nambah data
        return view ('prak10.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //menerima data
        $pesan = ['required'=> 'field harus diisi'];
        $this->validate($request,[
            'kat' => 'required',
            'desk' => 'required',
        ]);
        produks::create([
                'kategori'=> $request->kat,
                'keterangan'=> $request->desk,
        ]);
        return redirect()->route('prak10.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan data dan form yang mau di edit
        $edit = produks::where('id', $id)->first();
        return view('prak10.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //proses update data
        $pesan = ['required'=> 'field harus diisi'];
        $this->validate($request,[
            'kat' => 'required',
            'desk' => 'required',
        ]);
          produks::where('id', $id)->update([
            'kategori' => $request->kat,
            'keterangan' => $request->desk,
          ]); 
          return redirect()->route('prak10.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //proses hapus
        produks::where('id', $id)->delete();
          return redirect()->route('prak10.index');

    }
}
