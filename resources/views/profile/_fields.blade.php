<div class="col-md-15">
<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
	{!! Form::label('Nama Lengkap') !!}
	{!! Form::text('nama', $profile->nama, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
	<span class="text-danger">{{ $errors->has('nama') ? $errors->first('nama') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
	{!! Form::label('Tempat Lahir') !!}
	{!! Form::text('tempat_lahir', $profile->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
	<span class="text-danger">{{ $errors->has('tempat_lahir') ? $errors->first('tempat_lahir') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
	{!! Form::label('Tanggal Lahir') !!}
	{!! Form::date('tanggal_lahir', $profile->tanggal_lahir, ['class' => 'form-control', 'placeholder' => 'Tanggal Lahir']) !!}
	<span class="text-danger">{{ $errors->has('tanggal_lahir') ? $errors->first('tanggal_lahir') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('nomor_telepon') ? 'has-error' : '' }}">
	{!! Form::label('Nomor Telpon') !!}
	{!! Form::text('nomor_telepon', $profile->nomor_telepon, ['class' => 'form-control', 'placeholder' => 'Nomor Telpon']) !!}
	<span class="text-danger">{{ $errors->has('nomor_telepon') ? $errors->first('nomor_telepon') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
	{!! Form::label('Jenis kelamin') !!}
	{!! Form::select('jenis_kelamin',['...' => '...', 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'],null,['class'=>'form-control selectpicker','data-live-search'=>'true','title'=>'Pilih Jenis Kelamin']) !!}
	<span class="text-danger">{{ $errors->has('jenis_kelamin') ? $errors->first('jenis_kelamin') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
	{!! Form::label('Alamat') !!}
	{!! Form::text('alamat', $profile->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
	<span class="text-danger">{{ $errors->has('alamat') ? $errors->first('alamat') : '' }}</span>
</div>
</div>