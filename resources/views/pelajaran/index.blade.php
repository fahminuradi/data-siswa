@extends('layouts.app')
@section('content')
<div class="container">
	  <div class="row justify-content-center">
	  	<div class="col-md-15">
	  	  <h3>Data Siswa</h3>
	  	</div>
	  <table class="table table-hover table-sm">
	  	<tr>
	  	  <th width="200px">Kelas</th>
		  <th width="200px">Jurusan</th>
		  <th width="200px">Guru</th>
          <th width="200px">Hari</th>
          <th width="200px">Jam</th>
	  	  <th width="300px">Aksi</th>
	  	</tr>
	  	@foreach ($pelajarans as $pelajaran)
	  	<tr>
	      <td>{{$pelajaran->kelas}}</td>
        <td>{{$pelajaran->jurusan}}</td>
        <td>{{$pelajaran->guru}}</td>
        <td>{{$pelajaran->hari}}</td>
        <td>{{$pelajaran->mapel}}</td>
		  <td>
	  	    <form action="{{route('pelajaran.destroy',$pelajaran->id)}}" method="post">
	  	  	  <a class="btn btn-sm btn-primary" href="{{route('pelajaran.show',$pelajaran->id)}}"><i class="fa fa-info"></i>lihat</a>
						<a class="btn btn-sm btn-warning" href="{{route('pelajaran.show',$pelajaran->id)}}"><i class="fa fa-info"></i>edit</a>
	  	  	  @csrf
	  	  	  @method('DELETE')
	  	  	  <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash">hapus</i></button>
	  	  	</form>
	  	  </td>
	  	</tr>
		@endforeach
	  </table>
          <div class="col-md-11">
            <a class="btn btn-primary" href="{{route('pelajaran.create')}}">+</a>
          </div>
	</div>
@endsection