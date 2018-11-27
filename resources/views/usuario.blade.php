@extends('layout')
  
@section('content')
   <h1>{{$title}}</h1>
   <hr>
   
    <ul>
        @forelse ($usuarios as $usuario)
            <li>
                {{$usuario}}
            </li>
        @empty
        <li>No hay usuarios registradas</li>
        
        @endforelse
    </ul>
@endsection