@extends('layout')
  
@section('content')
   <h1>{{$title}}</h1>
   <hr>
   
    <ul>
        @forelse ($ubicaciones as $ubicacion)
            <li>
                {{$ubicacion}}
            </li>
        @empty
        <li>No hay categorias registradas</li>
        
        @endforelse
    </ul>
@endsection