<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Departemen;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //fungsi eloquent menampilkan data menggunakan pagination
        /*$pegawais = Pegawai::all(); // Mengambil semua isi tabel
        $posts = Pegawai::orderBy('nip', 'desc')->paginate(6);
        return view('pegawais.index', compact('pegawais'));
        with('i', (request()->input('page', 1) - 1) * 5);
        */
        $pegawais = Pegawai::with('departemen')->get();
        $paginate = Pegawai::orderBy('nip', 'desc')->paginate(6);
        return view('pegawais.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('pegawais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //melakukan validasi data
         $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'id_departemen' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        Pegawai::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pegawais.index')
        ->with('success', 'Pegawai Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nip){
        //menampilkan detail data dengan menemukan/berdasarkan Nim Pegawai
        $Pegawai = Pegawai::find($nip);
        return view('pegawais.detail', compact('Pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nip){
        //menampilkan detail data dengan menemukan berdasarkan Nim Pegawai untuk diedit
        $Pegawai = Pegawai::find($nip);
        return view('pegawais.edit', compact('Pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nip){
        //melakukan validasi data
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'id_departemen' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Pegawai::find($nip)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pegawais.index')
        ->with('success', 'Pegawai Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nip){
        //fungsi eloquent untuk menghapus data
        Pegawai::find($nip)->delete();
        return redirect()->route('pegawais.index') -> with('success', 'Pegawai Berhasil Dihapus');
    }
}