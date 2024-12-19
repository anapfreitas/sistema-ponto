<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateFuncionarioRequest;



class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view("funcionario.index", compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Funcionario::create($request->validated());
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $funcionario = Funcionario::find((int)$id);

        if (!$funcionario) {
            return redirect()->route('funcionarios.index')->with('error', 'Funcionário não encontrado.');
        }

        return view('funcionario.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $funcionario = Funcionario::find((int)$id);

        if (!$funcionario) {
            return redirect()->route('funcionarios.index')->with('error', 'Funcionário não encontrado.');
        }

        return view('funcionario.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $funcionario = Funcionario::find((int)$id);

        if (!$funcionario) {
            return redirect()->route('funcionarios.index')->with('error', 'Funcionário não encontrado.');
        }

        $funcionario->update($request->validated());
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $funcionario = Funcionario::find((int)$id);

        if (!$funcionario) {
            return redirect()->route('funcionarios.index')->with('error', 'Funcionário não encontrado.');
        }

        $funcionario->delete();

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário excluído com sucesso!');
    
    }
}