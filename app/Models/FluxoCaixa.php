<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FluxoCaixa extends Model
{
    use HasFactory;

    protected $table = 'fluxo_caixas';
    protected $fillable = ['nome','valor_entrada','data_entrada','valor_saida','data_saida','valor_total','descricao'];
}
