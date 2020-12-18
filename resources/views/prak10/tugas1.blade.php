<!DOCTYPE html>
<html>
<head>
	<title>
		Daftar kategori
	</title>
</head>
<body>
	<h3>
		Data Kategori
	</h3>
	jumlah data : {{$jum}}
	<a href="http://localhost:8000/prak10/create">Tambah Data</a>
		<table>
			<thead>
				<tr>
					<th>no</th>
					<th>ID KATEGORI</th>
					<th>Kategori</th>
					<th>Deskripsi</th>
					<th>Menu</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $i=>$p)
				<tr>
					<td>{{$i+1}}</td>
					<td>{{$p->id}}</td>
					<td>{{$p->kategori}}</td>
					<td>{{$p->keterangan}}</td>
					<td><a href="http://localhost:8000/prak10/{{$p->id}}/edit">Edit</a></td>

				</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>