<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nombre' => 'Juan Pérez',
            'correo_electronico' => 'juan.perez@example.com',
            'direccion' => '123 Calle Principal',
            'telefono' => '5551234567',
        ]);

        Cliente::create([
            'nombre' => 'Ana Gómez',
            'correo_electronico' => 'ana.gomez@example.com',
            'direccion' => '456 Avenida Secundaria',
            'telefono' => '5559876543',
        ]);

    }
}
