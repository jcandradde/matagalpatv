@extends('layout')
  
@section('content')

   <hr>
   
    <ul>
        @forelse ($empleados as $empleado)
            <li>
                {{$empleado}}
            </li>
        @empty
        <li>No hay usuarios registrados</li>
        
        @endforelse
    </ul>
@endsection