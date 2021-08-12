@extends('layouts.base')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        <!-- Mensaje flash-->
        @if(session('clienteModificado'))
        <div class="alert alert-success">
            {{ session('clienteModificado') }}
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
            <div class="card">
                <form action="{{ route ('edit',$cliente->id_cliente)}}" method="POST">
                @csrf @method('PATCH')
                    <div class="card-header text-center">Modificar Cliente</div>
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9" value="{{ $cliente->nombre}}">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Telefono</label>
                            <input type="text" name="telefono" class="form-control col-md-9" value="{{ $cliente->telefono}}">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-2">Correo</label>
                            <input type="text" name="correo" class="form-control col-md-9" value="{{ $cliente->correo}}">
                        </div>
                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-9 offset-2">Modificar</button>
                        </div>
                        
                    </div>

                </form>

            </div>

        </div>
    
    </div>    
  
    <a class="btn btn-light btn-xs mt-5" href="{{ url('/') }}">&laquo Regresar</a>  
</div>