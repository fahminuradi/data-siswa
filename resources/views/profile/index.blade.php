@extends('layouts.app')
@section('content')
<div class="container">
	  <div class="row justify-content-center">
	  	<div class="col-md-15">
	  	  <h3>Data Siswa</h3>
	  	</div>
	  <table class="table table-hover table-sm">
	  	<tr>
	  	  <th width="300px">Nama</th>
		  <th width="200px">Tempat Lahir</th>
		  <th width="200px">Tanggal Lahir</th>
          <th width="200px">Nomor Telepon</th>
          <th width="200px">Jenis Kelamin</th>
          <th width="200px">Alamat</th>
	  	  <th width="300px">Aksi</th>
	  	</tr>
	  	@foreach ($profiles as $profile)
	  	<tr>
	      <td>{{$profile->nama}}</td>
        <td>{{$profile->tempat_lahir}}</td>
        <td>{{$profile->tanggal_lahir}}</td>
        <td>{{$profile->nomor_telepon}}</td>
        <td>{{$profile->jenis_kelamin}}</td>
        <td>{{$profile->alamat}}</td>
		  <td>
	  	    <form action="{{route('profile.destroy',$profile->id)}}" method="post">
	  	  	  <a class="btn btn-sm btn-primary" href="{{route('profile.show',$profile->id)}}"><i class="fa fa-info"></i>lihat</a>
						<a class="btn btn-sm btn-warning" href="{{route('profile.show',$profile->id)}}"><i class="fa fa-info"></i>edit</a>
	  	  	  @csrf
	  	  	  @method('DELETE')
	  	  	  <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash">hapus</i></button>
	  	  	</form>
	  	  </td>
	  	</tr>	
		@endforeach
	  </table>
          <div class="col-md-11">
            <a class="btn btn-primary" href="{{route('profile.create')}}">+</a>
          </div>
	</div>
@endsection