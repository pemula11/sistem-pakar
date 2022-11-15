<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kerusakan extends Model
{
    use HasFactory;
    protected $table = 'kerusakan';
    protected $fillable = ['nama_kerusakan','kode_kerusakan', 'deskripsi_kerusakan'];

    /**
     * Get all of the comments for the kerusakan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rule(): HasMany
    {
        return $this->hasMany(Rule::class, 'kerusakan_id', 'id');
    }
}
