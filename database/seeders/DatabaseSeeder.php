<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //\App\Models\User::factory(10)->create();

         //\App\Models\User::factory()->create([
             //'name' => Str::random(10),
             //'email' => Str::random(10).@gmail.com,
            // 'password' => Hash::make('password')
         //]);

         //$this->call(VendaSeeder::class);
         $this->call(VendedorSeeder::class);
         
    }
}