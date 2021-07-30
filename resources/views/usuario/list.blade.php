
@extends('layout.app')

@section('title','Lista Usuários')

@section('content')
    <div class="row">
        <h1>Listar Usuários</h1>
    </div>
    
    <div class="row">
        @if ( !empty($message) )
            <div>
                {{ $message }}
            </div>
        @else
            @if ( session('message'))
                <div>
                    {{ session('message') }}
                </div>
        @endif
    </div>
    
    <div class="row">
        <div class="col-sm-auto">
            @include('usuario._partes.menu')
        </div>
        <div class="col-lg">
            <div class="row">
                <div class="container-fluid">
                    <form action="{{ route('usuario.search') }}" method="post">
                        @csrf
                        <label for="nome_documento"> Nome/Documento: 
                        <input type="text" name="nome_documento" required>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>
                </div>
            </div>
            
            <div class="row container-fluid">
                <ul class="list-group">

                    @foreach ($usuarios as $usuario)

                        <li class="list-group-item d-flex justify-content-between align-items-center"">
                            <div class="col-sm">
                                <h5 class="mb-1">{{$usuario->nome}}</h5>
                                <small>{{$usuario->documento}}</small>
                            </div>
                            <span class="badge badge-primary badge-pill">  <a href="{{ route('usuario.details', $usuario->id) }}"><span class="text-white">>></span></a> </span>
                        </li> 

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif

@endsection
       
