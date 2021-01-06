<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - Mohamad Rafli</title>
</head>
<body>

	<h2><a href="Mohamad Rafli">Mohamad Rafli</a></h2>
	<h3>Edit siswa</h3>

	<a href="/siswa"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($siswa as $p)
	<form action="/siswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->siswa_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->siswa_nama }}"> <br/>
		Kelas <input type="text" required="required" name="kelas" value="{{ $p->siswa_kelas }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->siswa_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->siswa_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>