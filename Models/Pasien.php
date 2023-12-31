<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    //enghubungkan model ke table pasiens
    protected $table = 'pasiens';

    //mendeklarasikan kolom yang boleh diisi
    protected $fillable = ['nama', 'jk', 'alamat', 'tgl_lahir', 'telp'];
}
