<div class="col-md-15">
<div class="form-group {{ $errors->has('guru') ? 'has-error' : '' }}">
	{!! Form::label('Nama Guru') !!}
	{!! Form::text('guru', $pelajaran->guru, ['class' => 'form-control', 'placeholder' => 'Nama Guru']) !!}
	<span class="text-danger">{{ $errors->has('guru') ? $errors->first('guru') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('hari') ? 'has-error' : '' }}">
	{!! Form::label('Hari') !!}
	{!! Form::text('hari', $pelajaran->hari, ['class' => 'form-control', 'placeholder' => 'Hari']) !!}
	<span class="text-danger">{{ $errors->has('hari') ? $errors->first('hari') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('mapel') ? 'has-error' : '' }}">
	{!! Form::label('Pelajaran') !!}
	{!! Form::text('mapel', $pelajaran->mapel, ['class' => 'form-control', 'placeholder' => 'Pelajaran']) !!}
	<span class="text-danger">{{ $errors->has('mapel') ? $errors->first('mapel') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
	{!! Form::label('Tanggal') !!}
	{!! Form::date('tanggal', $pelajaran->tanggal, ['class' => 'form-control']) !!}
	<span class="text-danger">{{ $errors->has('tanggal') ? $errors->first('tanggal') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('kelas') ? 'has-error' : '' }}">
	{!! Form::label('Kelas') !!}
	{!! Form::select('kelas',['...' => '...', 'Sepuluh' => 'Sepuluh', 'Sebelas' => 'Sebelas', 'Duabelas' => 'Duabelas'],null,['class'=>'form-control selectpicker','data-live-search'=>'true','title'=>'Pilih Kelas']) !!}
	<span class="text-danger">{{ $errors->has('kelas') ? $errors->first('kelas') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('jurusan') ? 'has-error' : '' }}">
	{!! Form::label('Jurusan') !!}
	{!! Form::select('jurusan',['...' => '...', 'Teknik Kendaraan Ringan Otomotif' => 'Teknik Kendaraan Ringan Otomotif', 'Teknik Bisnis Sepeda Motor' => 'Teknik Bisnis Sepeda Motor', 'Teknik Komputer Jaringan' => 'Teknik Komputer Jaringan', 'Rekayasa Perangkat Lunak' => 'Rekayasa Perangkat Lunak', 'Farmasi' => 'Farmasi'],null,['class'=>'form-control selectpicker','data-live-search'=>'true','title'=>'Pilih Jurusan']) !!}
	<span class="text-danger">{{ $errors->has('jurusan') ? $errors->first('jurusan') : '' }}</span>
</div>
</div>