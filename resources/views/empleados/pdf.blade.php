<link href="{{asset('css/app.css')}}" rel="stylesheet">

<h1>Lista de empleados</h1>
<hr>

<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Cedula</th>
                <th>Fecha de Nacimiento</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Sexo</th>
                <th>Num INSS</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->p_nombre}}</td>
                    <td>{{$empleado->s_nombre}}</td>
                    <td>{{$empleado->p_apellido}}</td>
                    <td>{{$empleado->s_apellido}}</td>
                    <td>{{$empleado->cedula}}</td>
                    <td>{{$empleado->fecha_nacimiento}}</td>
                    <td>{{$empleado->telefono}}</td>
                    <td>{{$empleado->correo_e}}</td>
                    <td>{{$empleado->sexo}}</td>
                    <td>{{$empleado->num_inss}}</td>

                </tr>
            @endforeach
        </tbody>
</table>
