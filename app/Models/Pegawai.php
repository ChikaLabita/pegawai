<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model {
    use HasFactory;
    protected $table="pegawai"; // Eloquent akan membuat model pegawai menyimpan record di tabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'nip'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'nip',
        'nama',
        'alamat',
        'jenis_kelamin',
        'id_departemen',
    ];

    public function departemen(){
        return $this->belongsTo(Departemen::class);
    }
}
