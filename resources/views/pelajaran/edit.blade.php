@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Ubah identitas dibawah ini:</h3>
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

  	<form action="{{route('pelajaran.update',$pelajaran->id)}}" method="post">
  	  @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-8">
  	  	  <strong>Guru :</strong>
  	  	  <input type="text" name="guru" class="form-control" value="{{$pelajaran->guru}}">
  	  	</div>
  	  	<div class="col-md-8">
          <strong>Hari: </strong>
  	  	  <input type="text" name="hari" class="form-control" value="{{$pelajaran->hari}}">
  	  	</div>
        <div class="col-md-8">
          <strong>Pelajaran:</strong>
          <input type="text" name="mapel" class="form-control" value="{{$pelajaran->mapel}}">
        </div>
        <div class="col-md-8">
          <strong>Tanggal</strong>
          <input type="date" name="tanggal" class="form-control" value="{{$pelajaran->tanggal}}">
        </div>
		    <div class="col-md-10">
          <strong>Kelas</strong>
          <strong>
          <select name="kelas">
            <option value="{{$pelajaran->kelas}}">{{$pelajaran->kelas}}</option>
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
          	<option value="{{$pelajaran->jurusan}}">{{$pelajaran->jurusan}}</option>
            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
            <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Farmasi">Farmasi</option>
          </select>
          </strong>
        </div>
  	  	<div class="col-md-3">
  	  	  <a href="{{route('pelajaran.index')}}" class="btn btn-sm btn-danger">Kembali</a>
  	  	  <button type="submit" class="btn btn-sm btn-primary">ubah</button>
  	  	</div>
  	  </div>
  	</form>

  </div>
@endsection