<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = ['nis','nama','kelas','jenis_kelamin','alamat_domisili','telp','foto'];
    protected $table = 'siswa';
    public $timestamps = false;
}
