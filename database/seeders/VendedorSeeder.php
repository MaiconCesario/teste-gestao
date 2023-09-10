<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendedorModel;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VendedorModel::create([
            'nome_vendedor' => 'Letícia',
            'email' => 'leticia@email.com',
            'senha' => '123456'
        ]);
    }
}
