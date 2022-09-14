@extends('pegawais.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Pegawai
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>NIP: </b>{{$Pegawai->nip}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Pegawai->nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Pegawai->alamat}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>{{$Pegawai->jenis_kelamin}}</li>
                    <li class="list-group-item"><b>Jabatan: </b>{{$Pegawai->jabatan}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('pegawais.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection