<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imposto extends Model
{
    use HasFactory;

    protected $table = 'impostos';
    protected $fillable = ['iptu','inpc','receita_federal','rais','descricao'];

}
