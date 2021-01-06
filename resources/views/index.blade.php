<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - Mohamad Rafli</title>
</head>
<body>

	<h2>Mohamad Rafli</h2>
	<h3>Data Siswa</h3>

	<a href="/siswa/tambah"> + Tambah Siswa Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($siswa as $p)
		<tr>
			<td>{{ $p->siswa_nama }}</td>
			<td>{{ $p->siswa_kelas }}</td>
			<td>{{ $p->siswa_umur }}</td>
			<td>{{ $p->siswa_alamat }}</td>
			<td>
				<a href="/siswa/edit/{{ $p->siswa_id }}">Edit</a>
				|
				<a href="/siswa/hapus/{{ $p->siswa_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>