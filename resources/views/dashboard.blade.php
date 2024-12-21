@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Funcionários</h6>
            </div>
            <div class="card-body">
                <p>Total de funcionários: </p>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Relatórios</h6>
            </div>
            <div class="card-body">
                <p>Total de relatórios: </p>
            </div>
        </div>
    </div>
</div>
@endsection
