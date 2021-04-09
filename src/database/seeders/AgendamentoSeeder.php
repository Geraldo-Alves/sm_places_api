<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $agendamentoPrimeiraDose = [
            'user_id' => 2,
            'agenda_vacinacao_id' => 17
        ];

        DB::table('usuario_agenda')->insert($agendamentoPrimeiraDose);

        $agendamentoSegundaDose = [
            'user_id' => 2,
            'agenda_vacinacao_id' => 17
        ];

        DB::table('usuario_agenda')->insert($agendamentoSegundaDose);
        
    }
}
