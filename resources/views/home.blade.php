@extends('layouts.app')

@section('content')
<div class="container">
    </nav>
    <div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/home')}}">
                <i class="fa fa-home"></i>
                Inicio <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/empleados')}}">
                <i class="fa fa-user"></i>
                Empleados
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa fa-tv"></i>
                Equipos
                </a>
            </li>
            <hR></hR>         

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <i class="fa fa-circle"></i>
            </a>
            </h6>
            <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa fa-file"></i>
                Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa fa-cube"></i>
                Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
                </a>
            </li>
            </ul>
        </div>
        </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Este es tu panel de administración</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas dentro de MatagalpaTV
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
