<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solusi extends Model
{

    use HasFactory;
    protected $table = 'solusi';
    protected $fillable = ['nama_solusi','kode_solusi', 'deskripsi_solusi'];
}
