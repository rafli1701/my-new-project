<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - Mohamad Rafli</title>
</head>
<body>

	<h2><a href="Mohamad Rafli">Mohamad Rafli</a></h2>
	<h3>Data Siswa</h3>

	<a href="/siswa"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/siswa/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Kelas <input type="text" name="kelas" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>