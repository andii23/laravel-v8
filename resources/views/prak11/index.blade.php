@extends('praktikum')
@section('title', 'daftar stok produk')
@section('konten')

	<h3>Daftar produk</h3>
	<sup>total data : {{$jum}}</sup>
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produk</th>
      <th scope="col">Kategori</th>
      <th scope="col">Stok</th>
      <th scope="col">Harga Beli</th>
      <th scope="col">Harga Jual</th>
      <th scope="col"><a class="btn btn-primary" href="{{route('prak11.create')}}">Tambah Data</a></th>
    </tr>
  </thead>
  <tbody>
  	@Foreach($data as $i=>$p)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$p->nama}}</td>
      <td>{{$p->id_kategori}}</td>
      <td>{{$p->qty}}</td>
      <td>{{$p->harga_beli}}</td>
      <td>{{$p->harga_jual}}</td>
      <td><a class="btn btn-outline-danger" href="{{route('prak11.edit', $p->id)}}">Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop