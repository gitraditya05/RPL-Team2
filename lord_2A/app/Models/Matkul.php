<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $table = 'matkul';
    protected $fillable = ['kode','nama','sks','prasyarat','deskripsi'];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}
