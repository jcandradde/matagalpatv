<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'Empleado';
    
    protected $fillable = ['modelo','numero_serie', 'estado_fisico', 'id_marca', 'id_categoria', 'id_ubicacion'];

}
