<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    use HasFactory;

    protected $table = 'proprietarios';
    protected $fillable = ['nome','data_nascimento','cpf','rg','logradouro',
                           'bairro','cidade','uf','cep','numero_celular','email'];

    //Relacionamento condominio/proprietario//
    public function condominios(){
        return $this->hasMany(Condominio::class);
    }

}
