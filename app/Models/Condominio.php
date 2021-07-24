<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    use HasFactory;

    protected $table = 'condominios';
    protected $fillable = ['nome','data_criacao','cpf_cnpj','logradouro','bairro','cidade','uf','cep','numero_celular','email','proprietario_id'];

    //Relacionamento proprietario/condominio//
    public function proprietario(){
        return $this->belongsTo(Proprietario::class);
    }

    //Relacionamento condominio/blocos//

    public function blocos(){
        return $this->hasMany(Bloco::class);
    }

    //Relacionamento condominio/reservaItems//

    public function reservaItems(){
        return $this->hasMany(ReservaItem::class);
    }
}
