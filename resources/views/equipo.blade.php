@extends('layout')
  
@section('content')
   <h1>{{$title}}</h1>
   <hr>
   
    <ul>
        @forelse ($equipos as $equipo)
            <li>
                {{$equipo}}
            </li>
        @empty
        <li>No hay equipos registrados</li>
        
        @endforelse
    </ul>
@endsection