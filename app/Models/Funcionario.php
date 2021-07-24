<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';
    protected $fillable = ['nome','data_nascimento','cpf','rg','logradouro',
    'bairro','cidade','uf','cep','telefone_residencial','fone_celular','email',
    'funcao','data_admissao','data_demissao','salario','data_pagamento','descontos','observacoes'];

}
