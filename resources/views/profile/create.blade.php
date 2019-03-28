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

  	<form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<img src="/uploads/avatars/default.jpg" style="width: 150px; height= 150px; border-radius: 50%; margin-right: 10px;">
			<div class="form-group">
				<strong>pilih gambar</strong>
				<input type="file" name="avatar">
			</div>

      @include('errors.errors')

      {{ Form::open(['url' => 'profile', 'files'=>true]) }}
      @include('profile._fields')
        <div class="form-group">
          {{ Form::submit('Tambah', ['class'=>'btn btn-primary']) }}
          <a href="/profile" class="btn btn-danger">Kembali</a>
        </div>
        {!! Form::close() !!}
    </form>
  </div>
@endsection