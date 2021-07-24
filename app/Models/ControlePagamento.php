<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlePagamento extends Model
{
    use HasFactory;

    protected $table = 'controle_pagamentos';
    protected $fillable = ['status','total_aberto','total_pago','total_a_pagar','multas','outros','observacoes'];

}
