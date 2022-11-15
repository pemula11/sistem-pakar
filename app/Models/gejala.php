<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class gejala extends Model
{
    use HasFactory;
    protected $table = 'gejala';
    protected $fillable = ['nama_gejala','kode_gejala', 'deskripsi_gejala'];

    public function relasi_rule(): BelongsToMany
    {
        return $this->belongsToMany(Rule::class, 'relasi_rules', 'gejala_id', 'rule_id');
    }
}
