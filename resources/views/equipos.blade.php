@extends('layout')
  
@section('content')
   <h1>{{$title}}</h1>
   @if(Session::has('message'))
       <p class="alert alert-danger">{{Session::get('message')}}</p>
   @endif
   <hr>
   <div class="text-right">
   <a class="button btn-primary btn-lg" href="{{route('empleados.create')}}">Nuevo Empleado</a>
   </div>
   <br>
   <div class="table-responsive">
   <table class="table table-striped table-bordered">
      <thead class="thead bg-info">
          <th scope="col">#</th>
          <th scope="col">Primer Nombre</th>
          <th scope="col">Primer Apellido</th>
          <th scope="col">Cedula</th>
          <th scope="col">Editar</th>
      </thead>
      <tbody class="table-info">
      @foreach ($empleados as $empleado)
            <tr>
                <th scope="row">{{$empleado->id}}</td>
                <td>{{$empleado->p_nombre}}</td>
                <td>{{$empleado->p_apellido}}</td>
                <td>{{$empleado->cedula}}</td>
                <td class="text-center" >
                    <div class="btn-group">
                        <a class="button btn-success btn-sm" href="{{route('empleados.show',$empleado)}}"><i class="fa fa-eye"></i></a>
                        <a class="button btn-secondary btn-sm" href="{{route('empleados.edit',$empleado)}}"><i class="fa fa-pen"></i></a>
<!--                        <button class="btn btn-danger btn-sm" data-empid="{{--$empleado->id--}}" data-toggle="modal" data-target="#miModal"><i class="fa fa-trash"></i></button>-->
                        <form action="{{route('empleados.destroy',$empleado)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger btn-sm " type="submit"><i class="fa fa-trash"></i> </button>
                        </form>
                    </div>
                </td>
            </tr>
      @endforeach
      </tbody>
    </table>
    
    <a class="btn btn-dark btn-sm" href="{{route('empleados.generatepdf')}}" > Descargar pdf <i class="fa fa-file"></i></a>
    
    
    <br>
    {{$empleados->render()}}
   </div> 
   
   
@endsection
  
