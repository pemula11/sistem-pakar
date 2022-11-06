<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerusakan extends Model
{
    use HasFactory;
    protected $table = 'kerusakan';
    protected $fillable = ['nama_kerusakan','kode_kerusakan', 'deskripsi_kerusakan'];

}
