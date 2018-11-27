<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'Equipo';
    
    protected $fillable = ['modelo','numero_serie', 'estado_fisico', 'id_marca', 'id_categoria', 'id_ubicacion'];

}