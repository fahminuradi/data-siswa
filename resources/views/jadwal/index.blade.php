@extends('layouts.app')
@section('content')
	<div class="col-md-12">
		<h2><i class="fa fa-calender"></i></h2>
		<hr>

		@include('errors.errors')
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Jurusan</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($jadwals as $jadwal)
				<tr>
					<td><a href="profile/{{ $jadwal->profile->id }}">{{ $jadwal->profile->nama }}</a></td>
					<td>{{ $jadwal->pelajaran->kelas }}</td>
					<td>{{ $jadwal->pelajaran->jurusan }}</td>

					<td>
						<div class="input-group">
							{!! Form::open(['route'=>['jadwal.destroy', $jadwal->id], 'method'=>'DELETE',]) !!}
							{!! link_to_route('jadwal.show', '',[$jadwal->id],['class'=>'fa fa-bars btn btn-success btn-xs','title' => 'Lihat detail']) !!}
							{{ Form::button('',['type'=>'submit','class'=>'btn btn-danger btn-xs fa fa-trash','onclick'=>'return confirm("apakah yakin anda akan menghapus pemesanan ini?")','title' => 'hapus pemesanan']) }}
							{!! Form::close() !!}
						</div>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>
	</div>
@endsection