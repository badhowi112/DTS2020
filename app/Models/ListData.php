<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListData extends Model
{
    use HasFactory;
    protected $table = 'listdata';
    protected $fillable = ['nik','kecamatan','desa','alamat','nama','kondisi_atap','kondisi_lantai','kondisi_dinding','penghasilan','keterangan','verifikasi'];
}
