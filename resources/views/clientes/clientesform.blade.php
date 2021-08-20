@extends('layouts.base')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        <!-- Mensaje flash-->
        @if(session('clienteGuardado'))
        <div class="alert alert-success">
            {{ session('clienteGuardado') }}
        </div>
        @endif
        <!-- Validaciones de los errores-->
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
            <div class="card text-white bg-dark">
                <form action="{{ url ('/guardar')}}" method="POST">
                @csrf
                    <div class="card-header text-center">Agregar Cliente</div>
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9 text-white bg-secondary">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Telefono</label>
                            <input type="text" name="telefono" class="form-control col-md-9 text-white bg-secondary">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Correo</label>
                            <input type="text" name="correo" class="form-control col-md-9 text-white bg-secondary">
                        </div>
                        <div class="row form-group">
                            <button type="submit" class="btn btn-primary col-md-9 offset-1 mt-4">Guardar</button>
                        </div>
                        
                    </div>

                </form>

            </div>

        </div>
    
    </div>    
  
    <a class="btn btn-light btn-xs mt-5" href="{{ url('/') }}">&laquo Regresar</a>  
</div>
