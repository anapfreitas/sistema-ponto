@extends('layouts.app')

@section('title', 'Editar Funcionário')

@section('content')
<h1>Editar Funcionário</h1>

<form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST" class="mt-4">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $funcionario->nome }}" required>
    </div>

    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $funcionario->cpf }}" required>
    </div>

    <div class="mb-3">
        <label for="cargo" class="form-label">Cargo</label>
        <input type="text" name="cargo" id="cargo" class="form-control" value="{{ $funcionario->cargo }}" required>
    </div>

    <div class="mb-3">
        <label for="data_admissao" class="form-label">Data de Admissão</label>
        <input type="date" name="data_admissao" id="data_admissao" class="form-control" value="{{ $funcionario->data_admissao }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection
