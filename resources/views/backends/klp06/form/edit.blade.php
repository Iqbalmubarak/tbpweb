<html>
<head>
	<title>mengedit status KP mahasiswa</title>
</head>
<body>
 
	<h2><a href="">edit status KP</a></h2>
	<h3>Status KP mahasiswa</h3>
 
	<a href=""> Kembali</a>
	
	<br/>
	<br/>
 
	<!-- @foreach($students as $p) -->
	<form action="intern-acceptance" method="POST" enctype="multipart/form-data">
	<table width="600" border="0">
		<tr><td>Status KP : </td><td>
			<input type="radio" name="Jenis Kelamin" value="A"> Diterima
			<input type="radio" name="Jenis Kelamin" value="B"> Ditolak<br>
		<tr>
 			<td width="100">File PDF</td>
 			<td><input type="file" name="nama_file" required></td>
		</tr>
		<tr>
 			<td width="80"></td>
 			<td><input type="submit" value="Upload File"></td>
		</tr>
	</table>
	</form>
	<!-- @endforeach -->
		
 
</body>
</html>