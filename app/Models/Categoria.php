<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categoria';
    
    protected $fillable = ['modelo','numero_serie', 'estado_fisico', 'id_marca', 'id_categoria', 'id_ubicacion'];
    
    //
    
}
