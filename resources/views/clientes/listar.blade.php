@extends('layouts.base')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Clientes</h2>
        <a class="btn btn-success mb-4" href="{{ url('/clientes')}}">Agregar cliente</a>
        <!-- Mensaje -->
        @if(session('clienteEliminado'))
        <div class="alert alert-success">
        {{ session('clienteEliminado')}}
        </div>
        @endif
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->correo }}</td>
                        <td>
                            <form action="{{ route('delete',$cliente->id_cliente)}}" method="POST">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Desea eliminar al cliente?');" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $clientes->links()}}
        </div>
    </div>
</div>