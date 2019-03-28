@extends('layouts.app')
@section('content')
	<div class="col-md-12">
    <h2><i class="fa fa-info"></i> Info jadwal </h2>
    <hr>
    </div>
    <div class="col-md-10">
    <table class="table table-bordered table-striped">

    	<tr>
    		<th>Name</th>
    		<td>{{ $jadwal->profile->nama }}</td>
    	</tr>

    	<tr>
    		<th>Kelas</th>
    		<td>{{ $jadwal->pelajaran->kelas}}</td>
    	</tr>

    	<tr>
    		<th>Jurusan</th>
    		<td>{{ $jadwal->pelajaran->jurusan}}</td>
    	</tr>
    </table>
	</div>
@endsection