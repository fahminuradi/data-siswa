@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="col-md-12">    
            <h2><i class="fa fa-user"></i> Tentang Tamu</h2>
            <hr>

            <h3><i class="fa fa-user-circle-o"></i>Data Diri</h3>
            </div>
            <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered mt-1">
                <tr>
                    <th>Nama</th>
                    <td>{{ $profile->nama }}</td>
                    <td rowspan="6"><img src="{{Storage::url($profile->avatar)}}" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 25px;"></td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $profile->tempat_lahir }}</td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $profile->tanggal_lahir }}</td> 
                </tr>

                <tr>
                    <th>No Telpon</th>
                    <td>{{ $profile->nomor_telepon }}</td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $profile->jenis_kelamin }}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{ $profile->alamat }}</td>
                </tr>
            </table>
            </div>
            <a class="btn btn-danger" href="{{'/profile'}}">kembali</a>
        </div>
    </div>
@endsection

            