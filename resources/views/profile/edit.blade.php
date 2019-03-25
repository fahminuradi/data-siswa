@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Ubah identitas</h3>
  	  </div>
  	</div>

  	@if ($errors->any())
  	  <div class="alert alert-danger">
  	  	<strong>maaf, </strong> coba ubah kembali.<br>
  	  	<ul>
  	  	  @foreach ($errors as $error)
  	  	    <li>{{$error}}</li>
  	  	  @endforeach
  	  	</ul>
  	  </div>
  	@endif

    <form action="{{route('profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <img src="{{Storage::url($profile->avatar)}}" style="width: 150px; height= 150px; border-radius: 50%; margin-right: 10px;">
      <div class="form-group">
        <strong>pilih gambar</strong>
        <input type="file" name="avatar">
      </div>
      <div class="row">
        <div class="col-md-8">
          <strong>Nama Lengkap: </strong>
          <input type="text" name="nama" class="form-control" value="{{$profile->nama}}">
        </div>
        <div class="col-md-8">
          <strong>Tempat Lahir: </strong>
          <input type="text" name="tempat_lahir" class="form-control" value="{{$profile->tempat_lahir}}">
        </div>
        <div class="col-md-8">
          <strong>Tanggal Lahir:</strong>
          <input type="date" name="tanggal_lahir" class="form-control" value="{{$profile->tanggal_lahir}}">
        </div>
          <div class="col-md-8">
          <strong>Nomor Telepon: </strong>
          <input type="text" name="nomor_telepon" class="form-control" value="{{$profile->nomor_telepon}}">
        </div>
        <div class="col-md-10">
          <strong>Jenis Kelamin</strong>
          <strong>
          <select name="jenis_kelamin">
            <option value="{{$profile->jenis_kelamin}}">{{$profile->jenis_kelamin}}</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          </strong>
        </div>
        <div class="col-md-8">
          <strong>Alamat: </strong>
          <input type="text" name="alamat" class="form-control" value="{{$profile->alamat}}">
        </div>
        <div class="col-md-3">
          <a href="{{route('profile.index')}}" class="btn btn-sm btn-danger">Kembali</a>
          <button type="submit" class="btn btn-sm btn-primary">ubah</button>
        </div>
      </div>
    </form>

  </div>
@endsection