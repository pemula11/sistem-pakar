<?php

namespace App\Models;

use App\Models\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['kategori'];

    public function rule(): HasMany
    {
        return $this->hasMany(Rule::class, 'kategori_id', 'id');
    }
}
