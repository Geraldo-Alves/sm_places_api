<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Registro de usuários primários
     * @return void
     */
    public function run()
    {

        // password: admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$qrOn7VsLzRNZiVHzCqP6JuaM2OafeohSYcH7jyeNvaZ0TeNuiLckS',
            'data_nascimento' => '2021-04-07',
            'role' => 'admin'
        ]);

        // password: 123456
        DB::table('users')->insert([
            'name' => 'Usuário 1',
            'email' => 'mail@mail.com',
            'password' => '$2y$12$NirFga14Hcyc3Qk9tUCinOKE5T6tbc7HrIy6P6353vMGXli42XYXa ',
            'data_nascimento' => '1971-09-05',
            'role' => 'user'
        ]);

        $this->call([
            AgendaVacinacaoSeeder::class
        ]);
    }
}
