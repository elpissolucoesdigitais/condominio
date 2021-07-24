<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{
    use HasFactory;
    protected $table = 'financeiros';
    protected $fillable = ['bloco_id','fluxo_caixas_id','impostos_id','consumos_id','funcionarios_id','controle_pagamentos_id', 'data_financeiro'];

    public function bloco(){
        return $this->belongsTo(Bloco::class);
    }
}
