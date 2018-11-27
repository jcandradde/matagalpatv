@extends('layout')

@section('content')
    <h1>Nuevo empleado</h1>
    <hr>

    @if($errors->any())
        <p>Por favor corrige los errores de los campos siguientes: </p>
    @endif

    <form method="post" action="{{URL('empleados/crear')}}">
     {{csrf_field()}}
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPN">Primer Nombre</label>
          <input type="text" class="form-control" name="p_nombre" id="inputPN" placeholder="Primer Nombre" value="{{old('p_nombre')}}">
          @if($errors->has('p_nombre'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('p_nombre')}}</p>
              </div>
          @endif
        </div>
        <div class="form-group col-md-6">
          <label for="inputSN">Segundo Nombre</label>
          <input type="text" class="form-control" name="s_nombre" id="inputSN" placeholder="Segundo Nombre" value="{{old('s_nombre')}}">
          @if($errors->has('s_nombre'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('s_nombre')}}</p>
              </div>
          @endif
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPA">Primer Apellido</label>
          <input type="text" class="form-control" name="p_apellido" id="inputPA" placeholder="Primer Apellido" value="{{old('p_apellido')}}">
          @if($errors->has('p_apellido'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('p_apellido')}}</p>
              </div>
          @endif
        </div>
        <div class="form-group col-md-6">
          <label for="inputSA">Segundo Apellido</label>
          <input type="text" class="form-control" name="s_apellido" id="inputSA" placeholder="Segundo Apellido" value="{{old('s_apellido')}}">
          @if($errors->has('s_apellido'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('s_apellido')}}</p>
              </div>
          @endif
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCed">Cédula</label>
          <input type="text" class="form-control" name="cedula" id="inputCed" placeholder="Cédula" value="{{old('cedula')}}">
          @if($errors->has('cedula'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('cedula')}}</p>
              </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          <label for="inputTel">Teléfono</label>
          <input type="text" class="form-control" name="telefono" id="inputTel" placeholder="Teléfono" value="{{old('telefono')}}">
          @if($errors->has('telefono'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('telefono')}}</p>
              </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          <label for="inputFNac">Fecha de Nacimiento</label>
          <input type="date" class="form-control" name="fecha_nac" id="inputFNac" placeholder="Fecha de Nacimiento" value="{{old('fecha_nac')}}">
          @if($errors->has('fecha_nac'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('fecha_nac')}}</p>
              </div>
          @endif
        </div>
      </div>
      <div class="form-row">
         <div class="form-group col-md-6">
             <label for="inputEmail">Correo Electrónico</label>
             <input type="email" class="form-control" name="correo" id="inputEmail" placeholder="Correo Electrónico" value="{{old('correo')}}">
             @if($errors->has('correo'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('correo')}}</p>
              </div>
          @endif
         </div>
         <div class="form-group col-md-4">
            <label for="inputINNS">Número INNS</label>
            <input type="text" class="form-control" name="inss" id="inputINNS" placeholder="Cod. INNS" value="{{old('inss')}}">
            @if($errors->has('inss'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('inss')}}</p>
              </div>
          @endif
         </div>
        <div class="form-group col-md-2">
            <label>Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="radioM" value="M" {{ old('sexo')==='M' ? 'checked' : '' }}>
                <label class="form-check-label" for="radioM">Masculino</label>
            </div>
            <div class="form-check">
                 <input class="form-check-input" type="radio" name="sexo" id="radioF" value="F" {{ old('sexo')==='F' ? 'checked' : '' }}>
                 <label class="form-check-label" for="radioF">Femenino</label>
            </div>
            @if($errors->has('sexo'))
              <div class="alert alert-danger">
                  <p>{{$errors->first('sexo')}}</p>
              </div>
            @endif
        </div>
      </div>
      <br>
      <br>
      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar nuevo</button>
    </form>
@endsection


