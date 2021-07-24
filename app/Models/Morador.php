<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    use HasFactory;

    protected $table = 'moradores';
    protected $fillable = ['nome','data_nascimento','email','celular','morador_ativo','cpf','rg', 'data_cadastro', 'apartamento_id'];

    //Relacionamento morador/apartamento//
    public function apartamento(){
        return $this->belongsTo(Apartamento::class);
    }

    //Relacionamento morador/visita//
    public function visitas(){
        return $this->hasMany(Visita::class);
    }

    //Relacionamento morador/veiculos//
    public function veiculos(){
        return $this->hasMany(Veiculo::class);
    }
}

