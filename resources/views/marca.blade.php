@extends('layout')
  
@section('content')
   <h1>{{$title}}</h1>
   <hr>
   
    <ul>
        @forelse ($marcas as $marca)
            <li>
                {{$marca}}
            </li>
        @empty
        <li>No hay marcas registradas</li>
        
        @endforelse
    </ul>
@endsection