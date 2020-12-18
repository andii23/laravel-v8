<!DOCTYPE html>
<html>
<head>
	<title>
		Tambah data
	</title>
</head>
<body>
	<h3>Tambah Data</h3>
	<form method="POST" action="http://localhost:8000/prak10">
		@csrf()
		@method('POST')
		<div class="label">Kategori</div>
		<div class="input"><input type="text" name="kat">
			@if($errors->has("kat"))
				<span>Tidak boleh kosong</span>
			@endif
		</div>
		<div class="label">Deskripsi</div>
		<div class="input"><input type="text" name="desk">
			@if($errors->has("kat"))
				<span>Tidak boleh kosong</span>
			@endif
		</div>
		<div class="tombol">
			<input type="submit" class="btn" name="btnkirim" value="Tambahkan">
		</div>
	</form>
</body>
</html>