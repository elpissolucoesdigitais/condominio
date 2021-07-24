<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $table = 'vagas';
    protected $fillable = ['numero', 'bloco_id'];

    //Relacionamento vaga/bloco//
    public function bloco(){
        return $this->belongsTo(Bloco::class);
    }
    //Relacionamento vaga/veiculo//
    public function veiculos(){
        return $this->hasMany(Veiculo::class);
    }
}
