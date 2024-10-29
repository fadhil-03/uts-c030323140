<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truk extends Model
{
    use HasFactory;

    protected $table = 'truk';
    protected $primaryKey = 'id_truk';
    protected $fillable = ['nomor_truk', 'jenis_truk', 'kapasitas', 'status_truk'];

    public function jadwalTruk()
    {
        return $this->hasMany(JadwalTruk::class, 'id_truk');
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_truk');
    }
}