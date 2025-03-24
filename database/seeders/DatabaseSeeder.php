<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            PermisosSeeder::class,
            RolesPermisosSeeder::class,
            UsuariosSeeder::class,
            CategoriasSeeder::class,
            ProductosSeeder::class,
            PedidosSeeder::class,
            DetallesPedidoSeeder::class,
            MetodosPagoSeeder::class,
            PagosSeeder::class,
        ]);
    }
}
