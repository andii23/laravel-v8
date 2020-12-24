<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produks;
use App\Models\prak7;

class prak11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data dari table produks
        $data = prak7::get();
        $jum = prak7::count();
        return view ('prak11.index', compact ('data','jum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan form untk nambah data
        $pdata=produks::get();
        return view ('prak11.create',compact ('pdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //buat validasi
        $aturan = [
            'nama'=> 'required',
            'id_kategori'=> 'required|numeric',
            'qty'=> 'required|numeric',
            'harga_beli'=> 'required|numeric',
            'harga_jual'=> 'required|numeric',
        ];
        $msg = [
            'required'=>'wajib diisi!!!',
            'numeric'=>'harus angka!!!',
        ];
        //proses validasi form
        $this->validate($request,$aturan,$msg);
        //menambahkan data baru
        prak7::create([
                'nama'=> $request->nama,
                'id_kategori'=> $request->kat,
                'qty'=> $request->stok,
                'harga_beli'=> $request->hb,
                'harga_jual'=> $request->hj,
                
        ]);
        return redirect()->route('prak11.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan pencarian nama data berdasarkan id
        $kriteria = "%".$id."%";
        $KData = prak7::where("nama",'like',$kriteria)->get();
        $JRek = prak7::where("nama", $kriteria)->count();
        return view('prak11.index',compact('KData','JRek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit = prak7::where('id', $id)->first();
        $pdata=produks::get();
        return view('prak11.edit', compact('edit','pdata'));
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
        //
        //buat validasi
        $aturan = [
            'nama'=> 'required',
            'id_kategori'=> 'required|numeric',
            'qty'=> 'required|numeric',
            'harga_beli'=> 'required|numeric',
            'hj'=> 'required|numeric',
            'kat'=>'required|numeric',
        ];
        $msg = [
            'required'=>'wajib diisi!!!',
            'numeric'=>'harus angka!!!',
        ];
        //proses validasi form
        $this->validate($request,$aturan,$msg);
        //menambahkan data baru
        prak7::where('id', $id)->update([
                'nama'=> $request->nama,
                'id_kategori'=> $request->kat,
                'qty'=> $request->stok,
                'harga_beli'=> $request->hb,
                'harga_jual'=> $request->hj,
                
        ]);
        return redirect()->route('prak11.index');
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
        prak7::where('id', $id)->delete();
          return redirect()->route('prak11.index');
    }
}
