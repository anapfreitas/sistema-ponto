@extends('layouts.app')

@section('title', 'Adicionar Funcionário')

@section('content')
<h1>Adicionar Funcionário</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('funcionarios.store') }}" method="POST" class="mt-4">
    @csrf

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>
    </div>

    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" id="cpf" class="form-control" value="{{ old('cpf') }}" required pattern="\d{11}" title="O CPF deve conter exatamente 11 números.">
    </div>

    <div class="mb-3">
        <label for="cargo" class="form-label">Cargo</label>
        <input type="text" name="cargo" id="cargo" class="form-control" value="{{ old('cargo') }}" required>
    </div>

    <div class="mb-3">
        <label for="data_admissao" class="form-label">Data de Admissão</label>
        <input type="date" name="data_admissao" id="data_admissao" class="form-control" value="{{ old('data_admissao') }}" required>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection