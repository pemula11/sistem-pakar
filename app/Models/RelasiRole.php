<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelasiRole extends Model
{
    use HasFactory;
    protected $table = 'relasi_rules';
    protected $fillable = ['rule_id', 'gejala_id'];
    public $timestamps = false;
}
