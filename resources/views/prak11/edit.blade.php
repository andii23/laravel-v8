@extends('praktikum')
@section('title', 'edit data stok produk')
@section('konten')

	<h3>Edit Data Daftar produk</h3>
	<div class="container-fluid">
       <form method="POST" action="http://localhost:8000/prak11/{{ $edit->id }}">
        {{csrf_field()}}
        @method('PUT')
        
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{$edit->nama}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Nama Produk
              @if($errors->has('nama'))
              <span class="badge badge-danger">
                 {{$errors->first('nama')}}
              </span>
              @endif
            </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Stok</label>
            <input type="text" name="stok" class="form-control" id="stok" value="{{$edit->qty}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Stok Produk
            @if($errors->has('stok'))
            <span class="badge badge-danger">
                {{$errors->first('stok')}}
            </span>
            @endif
          </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga Beli</label>
            <input type="text" name="hb" class="form-control" id="hb" value="{{$edit->harga_beli}}">
            <small id="emailHelp" class="form-text text-muted"> Isikan Harga Beli Produk
            @if($errors->has('hb'))
            <span class="badge badge-danger">
                {{$errors->first('hb')}}
            </span>
            @endif
          </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga Jual</label>
            <input type="text" name="hj" class="form-control" id="hj" value="{{$edit->harga_jual}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Harga Jual Produk
            @if($errors->has('hj'))
            <span class="badge badge-danger">
                {{$errors->first('hj')}}
            </span>
            @endif
          </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kategori</label>
            <select name="kat" class="form-control" id="kat">
              @foreach($pdata as $i=>$k)
              <option value="{{$k->id}}"> {{$k->kategori}}</option>    
              @endforeach
            </select>
            <small id="emailHelp" class="form-text text-muted">Isikan Harga Jual Produk</small>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
  </div>
    <div class="container-fluid">
        <form method="POST" action="http://localhost:8000/prak11/{{$edit->id}}">
           {{csrf_field()}}
          @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@stop
  