<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rule extends Model
{
    use HasFactory;
    protected $table = 'rules';


    public function kerusakan(): BelongsTo
    {
        return $this->belongsTo(kerusakan::class, 'kerusakan_id', 'id');
    }
    public function solusi(): BelongsTo
    {
        return $this->belongsTo(solusi::class, 'solusi_id', 'id');
    }

    public function relasi_gejala(): BelongsToMany
    {
        return $this->belongsToMany(gejala::class, 'relasi_rules', 'rule_id', 'gejala_id');
    }
}
