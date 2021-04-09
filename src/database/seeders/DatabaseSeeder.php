<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Registro de usuário admin
     * password: 'admin'
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$qrOn7VsLzRNZiVHzCqP6JuaM2OafeohSYcH7jyeNvaZ0TeNuiLckS',
            'data_nascimento' => '2021-04-07',
            'role' => 'admin'
        ]);

        $this->call([
            AgendaVacinacaoSeeder::class
        ]);
    }
}
