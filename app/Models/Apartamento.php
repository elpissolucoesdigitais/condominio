<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    protected $table = 'apartamentos';
    protected $fillable = ['numero','andar','interfone','valor', 'bloco_id'];

    //Relacionamento apartamento/blocos//

    public function bloco(){
        return $this->belongsTo(Bloco::class);
    }

    //Relacionamento apartamento/visitas//

    public function visitas(){
        return $this->hasMany(Visita::class);
    }

    //Relacionamento apartamento/morador//
    public function morador(){
        return $this->hasOne(Morador::class);
    }

    public function consumos(){
        return $this->hasMany(Consumo::class);
    }

}
