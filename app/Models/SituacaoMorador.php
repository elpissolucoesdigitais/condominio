<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituacaoMorador extends Model
{
    use HasFactory;

    protected $table = 'situacao_moradores';
    protected $fillable = ['situacao'];
}
