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
                    <th>Guru</th>
                    <td>{{ $pelajaran->guru }}</td>
                </tr>

                <tr>
                    <th>Hari</th>
                    <td>{{ $pelajaran->hari }}</td>
                </tr>

                <tr>
                    <th>Pelajaran</th>
                    <td>{{ $pelajaran->mapel }}</td> 
                </tr>

                <tr>
                    <th>Tanggal</th>
                    <td>{{ $pelajaran->tanggal }}</td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>{{ $pelajaran->kelas }}</td>
                </tr>

                <tr>
                    <th>Jurusan</th>
                    <td>{{ $pelajaran->jurusan }}</td>
                </tr>
            </table>
            </div>
            <a class="btn btn-danger" href="{{'/pelajaran'}}">kembali</a>
        </div>
    </div>
@endsection

            