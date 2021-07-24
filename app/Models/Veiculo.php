<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $table = 'veiculos';
    protected $fillable = ['ano', 'modelo', 'placa', 'morador_id', 'vaga_id'];

    //Relacionamento veiculos/morador//
    public function morador(){
        return $this->belongsTo(Morador::class);
    }

    //Relacionamento veiculos/vagas//
    public function vaga(){
        return $this->belongsTo(Vaga::class);
    }
}
