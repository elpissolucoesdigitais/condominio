<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMorador extends Model
{
    use HasFactory;

    protected $table = 'tipo_moradores';
    protected $fillable = ['tipo'];
}
