@extends('layout')


@section('content')

<div class="card border-success " >
  <div class="card-header bg-dark text-center text-success"><h3><strong>{{$empleado->p_nombre}} {{$empleado->s_nombre}} {{$empleado->p_apellido}} {{$empleado->s_apellido}}</strong></h3></div>
  <div class="card-body">
    <h5 class="card-title text-center">Información de empleado</h5>
    <p class="card-text text-center">Id: <strong>{{$empleado->id}}</strong></p>
    <p class="card-text text-center">Correo Electrónico: <strong>{{$empleado->correo_e}}</strong></p>
    <p class="card-text text-center">Telefóno: <strong>{{$empleado->telefono}}</strong></p>
    <p class="card-text text-center">Fecha de Nacimiento: <strong>{{$empleado->fecha_nacimiento}}</strong></p>
    <p class="card-text text-center">Sexo: <strong>{{$empleado->sexo === 'M' ? 'Masculino' : 'Femenino'}}</strong></p>
    <p class="card-text text-center">Número INSS: <strong>{{$empleado->num_inss}}</strong></p>
  </div>
</div>

@endsection