<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class solusi extends Model
{

    use HasFactory;
    protected $table = 'solusi';
    protected $fillable = ['nama_solusi','kode_solusi', 'deskripsi_solusi'];

    public function rule(): HasMany
    {
        return $this->hasMany(Rule::class, 'solusi_id', 'id');
    }

}
