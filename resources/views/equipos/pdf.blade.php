<link href="{{asset('css/app.css')}}" rel="stylesheet">

<h1>Lista de equipos</h1>
<hr>

<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Numero Serie</th>
                <th>Estado Fisico</th>
                <th>Id Marca</th>
                <th>Id Categoria</th>
                <th>Id Ubicacion</th>
                
                
            </tr>
        </thead>
        <tbody>
            @foreach($equipos as $equipo)
                <tr>
                    <td>{{$equipo->id}}</td>
                    <td>{{$equipo->modelo}}</td>
                    <td>{{$equipo->numero_serie}}</td>
                    <td>{{$equipo->estado_fisico}}</td>
                    <td>{{$equipo->idmarca}}</td>
                    <td>{{$equipo->idcategoria}}</td>
                    <td>{{$equipo->idubicacion}}</td>                   

                </tr>
            @endforeach
        </tbody>
</table>

