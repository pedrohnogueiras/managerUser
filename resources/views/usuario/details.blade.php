@extends('layout.app')

@section('title','Detalhes do usuário')

@section('content')

    <div class="row">
        <h1>Detalhes do usuário</h1>
    </div>
        
    <div class="row">
        <div class="col-sm-auto">
            @include('usuario._partes.menu')
        </div>
        <div class="col-lg">     
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-auto">
                                <span class="font-weight-bold">Nome: </span>
                            </div>
                            <div class="col-sm">
                                <span>{{ $usuario->nome }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-auto">
                                <span class="font-weight-bold">Endereço: </span>
                            </div>
                            <div class="col-sm">
                                <span>{{ $usuario->endereco }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-auto">
                                <span class="font-weight-bold">Tipo: </span>
                            </div>
                            <div class="col-sm">
                                <span>{{ $usuario->tipo == '0' ? 'física' : 'jurídica' }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-auto">
                                <span class="font-weight-bold">Documento: </span>
                            </div>
                            <div class="col-sm">
                                <span>{{ $usuario->documento }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-auto">
                                <span class="font-weight-bold">E-mail: </span>
                            </div>
                            <div class="col-sm">
                                <span>{{ $usuario->email }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-auto">
                                <span class="font-weight-bold">Telefone: </span>
                            </div>
                            <div class="col-sm">
                                <span>{{ $usuario->telefone }}</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>     
            
            <div class="row">
                <div class="col-sm-auto">
                    <form action="{{ route('usuario.atualizar', $usuario->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-success" type="submit">Atualizar</button>
                    </form>
                </div>
                
                <div class="col-sm-auto">
                    <form action="{{ route('usuario.delete', $usuario->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection