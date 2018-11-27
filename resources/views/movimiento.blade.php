@extends('layout')
  
@section('content')
   <h1>{{$title}}</h1>
   <hr>
   
    <ul>
        @forelse ($categorias as $categoria)
            <li>
                {{$categoria}}
            </li>
        @empty
        <li>No hay categorias registradas</li>
        
        @endforelse
    </ul>
@endsection