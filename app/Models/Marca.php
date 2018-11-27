<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'Marca';
    
    protected $fillable = ['modelo','numero_serie', 'estado_fisico', 'id_marca', 'id_categoria', 'id_ubicacion'];
    
    //
    
}
