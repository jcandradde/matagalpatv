<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'Empleado';
    
    protected $fillable = ['p_nombre','s_nombre', 'p_apellido', 's_apellido', 'fecha_nacimiento', 'cedula', 'telefono', 'correo_e', 'sexo', 'num_inss'];

}
