@extends('pegawais.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Pegawai
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('pegawais.update', $Pegawai->nip) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" class="form-control" id="nip" value="{{ $Pegawai->nip }}"
                            ariadescribedby="nip">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Pegawai->nama }}"
                            ariadescribedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat"
                            value="{{ $Pegawai->alamat }}" ariadescribedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="jenis_kelamin" name="jenis_kelamin" class="form-control" id="jenis_kelamin"
                            value="{{ $Pegawai->jenis_kelamin }}" ariadescribedby="jenis_kelamin">
                    </div>
                    <div class="form-group">
                        <label for="departemen">Jabatan</label>
                        <select class="form-control">
                            @foreach($Pegawai as $Pegawai)
                            <option value="{{$Pegawai->nama_departemen}}">{{$Pegawai->nama_departemen}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Edit Foto</label>
                        <br>
                        <input type="file" class="form-control" required="required" name="upload"></br>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection