@extends('layout')
  
@section('content')
   <h1>{{$title}}</h1>
   <hr>
   
    <ul>
        @forelse ($securities as $seguridad)
            <li>
                {{$seguridad}}
            </li>
        @empty
        <li>No hay nivel de seguridad registradas</li>
        
        @endforelse
    </ul>
@endsection