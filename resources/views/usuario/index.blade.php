@extends('layout.app')

@section('title', 'Gerencciado de usuários')

@section('content')
    <h1>Gerenciador de usuários</h1>

    @if ( session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
    
    @include('usuario._partes.menu')
    
@endsection
      
      
