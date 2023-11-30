<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuans extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'umur',
        'jlh_pinjam',
        'tujuan',
        'pendapatan',
        'pekerjaan',
        'pernikahan',
        'tanggungan',
        'status',
        'tenor',
    ];
}
