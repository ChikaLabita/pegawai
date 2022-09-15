<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;
    protected $table = 'departemen'; //Mendefinisikan bahwa model ini terkait dengan tabel kelas

    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }
}
