<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloco extends Model
{
    use HasFactory;

    protected $table = 'blocos';
    protected $fillable = ['nome','condominio_id'];

    //Relacionamento blocos/vagas//

    public function vagas(){
        return $this->hasMany(Vaga::class);
    }

    //Relacionamento blocos/gastos//

    public function gastos(){
        return $this->hasMany(Gasto::class);
    }

    //Relacionamento blocos/condominio//

    public function condominio(){
        return $this->belongsTo(Condominio::class);
    }

    //Relacionamento blocos/apartamento//

    public function apartamentos(){
        return $this->hasMany(Apartamento::class);
    }


}
