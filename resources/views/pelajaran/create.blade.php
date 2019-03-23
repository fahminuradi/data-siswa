@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Masukan identitas dibawah ini:</h3>
  	  </div>
  	</div>

  	@if ($errors->any())
  	  <div class="alert alert-danger">
  	  	<strong>maaf, </strong> coba ulangi kembali.<br>
  	  	<ul>
  	  	  @foreach ($errors as $error)
  	  	    <li>{{$error}}</li>
  	  	  @endforeach
  	  	</ul>
  	  </div>
  	@endif

  	<form action="{{route('pelajaran.store')}}" method="post" enctype="multipart/form-data">
			@csrf
  	  <div class="row">
  	  	<div class="col-md-8">
  	  	  <strong>Guru :</strong>
  	  	  <input type="text" name="guru" class="form-control" placeholder="masukan nama guru disini">
  	  	</div>
  	  	<div class="col-md-8">
          <strong>Hari: </strong>
  	  	  <input type="text" name="hari" class="form-control" placeholder="masukan hari">
  	  	</div>
        <div class="col-md-8">
          <strong>Pelajaran:</strong>
          <input type="text" name="mapel" class="form-control" placeholder="masukan pelajaran ">
        </div>
        <div class="col-md-8">
          <strong>Tanggal</strong>
          <input type="date" name="tanggal" class="form-control">
        </div>
				<div class="col-md-10">
          <strong>Kelas</strong>
          <strong>
          <select name="kelas">
            <option value="....">....</option>
            <option value="Sepuluh">Sepuluh</option>
            <option value="Sebelas">Sebelas</option>
            <option value="Duabelas">Duabelas</option>
          </select>
          </strong>
					</div>
        <div class="col-md-10">
          <strong>Jurusan</strong>
          <strong>
          <select name="jurusan">
            <option value="...">...</option>
            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
            <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Farmasi">Farmasi</option>
          </select>
          </strong>
          </div>
	
      </div>
  	  	<div class="col-md-3">
  	  	  <a href="{{route('pelajaran.index')}}" class="btn btn-sm btn-danger">Kembali</a>
  	  	  <button type="submit" class="btn btn-sm btn-primary">tambahkan</button>
  	  	</div>
  	  </div>
  	</form>

  </div>
@endsection