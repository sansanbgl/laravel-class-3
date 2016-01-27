<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Dosen</title>
</head>
<body>
	<form method="post">
		<input type="text" name="nip" value="{{$item->nip}}">
		<input type="text" name="nama" value="{{$item->nama}}">
		<input type="text" name="pangkat" value="{{$item->pangkat}}">
		<button type="submit">Simpan</button>
	</form>
</body>
</html>
