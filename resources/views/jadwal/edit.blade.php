@extends('layouts.app')
@section('content')
	<h2><i class="fa fa-pencil"></i> Edit jadwal</h2>
    <hr>
    	{!! Form::model($jadwal, ['route'=>['jadwal.update',$jadwal->id], 'method'=>'PUT']) !!}
    	@include('jadwal._fields')
    	{!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
        {!! link_to('/jadwal', 'Back',['class'=>'btn btn-success']) !!}
    {!! Form::close() !!}
@endsection