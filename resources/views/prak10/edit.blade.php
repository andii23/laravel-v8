<!DOCTYPE html>
<html>
<head>
	<title>
		Edit data
	</title>
</head>
<body>
	<h3>Edit Data</h3>
	<h4>Id Data = {{$edit->id}}</h4>
	<form method="POST" action="http://localhost:8000/prak10/{{$edit->id}}">
		@csrf()
		@method('PUT')
		<div class="label">Kategori</div>
		<div class="input"><input type="text" name="kat" value="{{$edit->kategori}}">
			@if($errors->has("kat"))
				<span>Tidak boleh kosong</span>
			@endif
		</div>
		<div class="label">Deskripsi</div>
		<div class="input"><input type="text" name="desk" value="{{$edit->keterangan}}">
			@if($errors->has("kat"))
				<span>Tidak boleh kosong</span>
			@endif
		</div>
		<div class="tombol">
			<input type="submit" class="btn" name="btnkirim" value="Edit">
		</div>
	</form>

	<form method="POST" action="http://localhost:8000/prak10/{{$edit->id}}">
		@csrf()
		@method('DELETE')
		<div class="tombol">
			<input type="submit" class="btn" name="btnkirim" value="delete">
		</div>
	</form>
</body>
</html>