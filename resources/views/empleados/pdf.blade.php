<link href="{{asset('css/app.css')}}" rel="stylesheet">

<h1>Lista de empleados</h1>
<hr>

<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Primer Nombre</th>
                <th>Primer Apellido</th>
                <th>Cedula</th>
                <th>Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->p_nombre}}</td>
                    <td>{{$empleado->p_apellido}}</td>
                    <td>{{$empleado->cedula}}</td>
                    <td>{{$empleado->fecha_nacimiento}}</td>
                </tr>
            @endforeach
        </tbody>
</table>
