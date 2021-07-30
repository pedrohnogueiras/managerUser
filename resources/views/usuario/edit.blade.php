@extends('layout.app')

@section('title','Atualizar Usuários')

@section('content')
        <div class="row">
            <h1 class="mb-1">Atualizar usuário</h1>
        </div>

        <div class="row">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}<li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="row">
            <div class="col-sm-auto">
                @include('usuario._partes.menu')
            </div>
            
            <div class="col-lg-auto">
                <form action="{{ route('usuario.update', $usuario->id) }}" method="POST">
                    @csrf
                    @method('put')
                    @include('usuario._partes.formCamps')
                    <button class="btn btn-success" type="submit">Atualizar</button>
                </form>
            </div>
        </div>
    
@endsection