
	<table>
		<tr>
			<th>No.</th>
			<th>Nip</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Aksi</th>
		</tr>
		<?php $i = 1;?>
		@foreach($items as $item)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$item->nip}}</td>
			<td>{{$item->nama}}</td>
			<td>{{$item->pangkat}}</td>
			<td>
				<a href="dosen/update/{{$item->id}}">Update</a>
				<a href="dosen/delete/{{$item->id}}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
