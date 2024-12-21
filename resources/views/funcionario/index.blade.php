@extends('layouts.app')

@section('title', 'Funcionários')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Funcionários</h1>

<a href="{{ route('funcionarios.create') }}" class="btn btn-primary mb-4">Adicionar Funcionário</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Cargo</th>
            <th>Data de Admissão</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($funcionarios as $funcionario)
        <tr>
            <td>{{ $funcionario->id }}</td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->cpf }}</td>
            <td>{{ $funcionario->cargo }}</td>
            <td>{{ $funcionario->data_admissao }}</td>
            <td>
                <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Nenhum funcionário encontrado.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection

