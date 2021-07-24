<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaItem extends Model
{
    use HasFactory;

    protected $table = 'reserva_items';
    protected $fillable = ['nome','identificador_item','valor','quantidade','condominio_id'];

    //Relacionamento reservaItems/condominio//

    public function condominio(){
        return $this->belongsTo(Condominio::class);
    }
}
