<div class="col-md-15">
<div class="form-group">
	{!! Form::label('nama','cari nama murid dibawah ini') !!} jika tidak ada tambahkan <a href="{{route('profile.create')}}">disini</a>
	<select class="selectpicker form-control" data-live-search="true" title="" name="profile_id">
		@foreach ($profiles as $profile)
            <option data-subtext="{{ $profile->nama }}" value="{{ $profile->id }}">{{ $profile->nama }}</option> J
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('pelajaran','Pelajaran:') !!}
    <select class="selectpicker form-control" data-live-search="true"
            title="" name="pelajaran_id">
        @foreach ($pelajarans as $pelajaran)
            <option data-subtext="{{ $pelajaran->kelas }}" value="{{ $pelajaran->id }}">Kelas : {{ $pelajaran->kelas }} {{ $pelajaran->jurusan }}</option>
        @endforeach
    </select>
</div>
</div>