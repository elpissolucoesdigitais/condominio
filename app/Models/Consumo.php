<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    use HasFactory;

    protected $table = 'consumos';
    protected $fillable = ['tipo_consumo','valor','data_competencia','vencimento','status','descricao','apartamento_id'];

    public function apartamento(){
        return $this->belongsTo(Apartamento::class);
    }

}
