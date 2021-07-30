<div class="form-group">
    <label for="nome">Nome:</label>
    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" value="{{ $usuario->nome ?? old('nome') }}" required>
</div>

<div class="form-group">
    <label for="nome">Endereço:</label>
    <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço" value="{{$usuario->endereco ?? old('endereco') }}" required>
</div>

<div class="form-group">
    <label for="tipo">Tipo pessoa</label>
    <select class="form-control" name="tipo" id="tipo">
        <option value="0">Pessoa Física</option>
        <option value="1">Pessoa Jurídica</option>
    </select>
</div>

<div class="form-group">
    <label for="documento">Documento:</label>
    <input class="form-control" type="text" name="documento" id="documento" placeholder="Documento" value="{{ $usuario->documento ?? old('documento') }}" required>
    <small>Entrar somento com digitos</small>
</div>

<div class="form-group">
    <label for="email">E-mail:</label>
    <input class="form-control" type="text" name="email" id="email" placeholder="E-mail" value="{{ $usuario->email ?? old('email') }}" required>
</div>

<div class="form-group">
    <label for="telefone">Telefone:</label>
    <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone" value="{{ $usuario->telefone ?? old('telefone') }}" required>
    <small>Entrar somento com digitos</small>
</div>