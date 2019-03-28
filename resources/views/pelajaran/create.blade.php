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

            @include('errors.errors')

            {{ Form::open(['url' => 'pelajaran','files'=>true]) }}
            @include('pelajaran._fields')
                <div class="form-group">
                    {{ Form::submit('Tambah', ['class'=>'btn btn-primary']) }}
                    <a href="/pelajaran" class="btn btn-danger">Kembali</a>
                </div>
        {!! Form::close() !!}
  	</form>

  </div>
@endsection