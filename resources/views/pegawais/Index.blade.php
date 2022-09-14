@extends('pegawais.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>BADAN OTONOM RANTING LEMAHBANG 1 | | KEC. SUKOREJO</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('pegawais.create') }}"> Input Pegawai</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Jabatan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pegawais as $Pegawai)
    <tr>

        <td>{{ $Pegawai->nip }}</td>
        <td>{{ $Pegawai->nama }}</td>
        <td>{{ $Pegawai->alamat }}</td>
        <td>{{ $Pegawai->jenis_kelamin }}</td>
        <td>{{ $Pegawai->jabatan }}</td>
        <td>
            <form action="{{ route('pegawais.destroy',$Pegawai->nip) }}" method="POST">

                <a class="btn btn-info" href="{{ route('pegawais.show',$Pegawai->nip) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('pegawais.edit',$Pegawai->nip) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
        </td>
    </tr>
    @endforeach
</table>
@endsection