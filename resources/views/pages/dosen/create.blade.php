<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<h1>Tambah Dosen</h1>
	{{Form::open(['url'=> 'dosen'])}}
		<div class="form-group">
			{{Form::label('Nip')}}
			{{Form::text('nip', $item->nip)}}
		</div>
		<div class="form-group">
			{{Form::label('Nama')}}
			{{Form::text('nama', $item->nama)}}
		</div>
		<div class="form-group">
			{{Form::label('Pangkat')}}
			{{Form::text('pangkat', $item->pangkat)}}
		</div>

		<div class="form-group">
			{{Form::submit('Tambah')}}
		</div>
	{{Form::close()}}

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
