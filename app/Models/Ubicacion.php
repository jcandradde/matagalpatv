<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'Ubicacion';
    
    protected $fillable = ['modelo','numero_serie', 'estado_fisico', 'id_marca', 'id_categoria', 'id_ubicacion'];
    
    //
    
}
