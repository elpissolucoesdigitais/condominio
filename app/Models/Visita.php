<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;

    protected $table = 'visitas';
    protected $fillable = ['morador_id', 'nome', 'rg', 'cpf','data_entrada',
                            'data_saida'];

    //Relacionamento visitas/apartamento//
    public function apartamento(){
        return $this->hasOne(Apartamento::class);
    }
    //Relacionamento visitas/apartamento//
    public function morador(){
        return $this->belongsTo(Morador::class);
    }
}
