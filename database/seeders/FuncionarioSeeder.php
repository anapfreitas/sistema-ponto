<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcionario::create([
            'nome' => 'Aline Silvas',
            'cpf' => '12345678901',
            'cargo' => 'Gerente',
            'data_admissao' => '2023-01-15',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        Funcionario::create([

            'nome' => 'Maria Souza',
            'cpf' => '98765432100',
            'cargo' => 'Secretária',
            'data_admissao' => '2023-02-10',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

    }
}
