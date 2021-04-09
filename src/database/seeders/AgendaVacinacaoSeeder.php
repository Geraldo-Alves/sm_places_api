<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaVacinacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* Agendas de Vacinação */
        $agendas = [
            [
                'data_inicio_vacinacao' => '2021-01-01',
                'data_fim_vacinacao' => '2021-01-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 85,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-02-01',
                'data_fim_vacinacao' => '2021-02-28',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 85,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-02-01',
                'data_fim_vacinacao' => '2021-02-28',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 80,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-03-01',
                'data_fim_vacinacao' => '2021-03-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 80,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-03-01',
                'data_fim_vacinacao' => '2021-03-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 75,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-04-01',
                'data_fim_vacinacao' => '2021-04-30',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 75,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-04-01',
                'data_fim_vacinacao' => '2021-04-30',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 70,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-05-01',
                'data_fim_vacinacao' => '2021-05-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 70,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-05-01',
                'data_fim_vacinacao' => '2021-05-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 65,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-06-01',
                'data_fim_vacinacao' => '2021-06-30',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 65,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-06-01',
                'data_fim_vacinacao' => '2021-06-30',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 60,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-07-01',
                'data_fim_vacinacao' => '2021-07-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 60,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-07-01',
                'data_fim_vacinacao' => '2021-07-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 55,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-08-01',
                'data_fim_vacinacao' => '2021-08-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 55,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-08-01',
                'data_fim_vacinacao' => '2021-08-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 50,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-09-01',
                'data_fim_vacinacao' => '2021-09-30',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 50,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-09-01',
                'data_fim_vacinacao' => '2021-09-30',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 45,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-10-01',
                'data_fim_vacinacao' => '2021-10-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 45,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-10-01',
                'data_fim_vacinacao' => '2021-10-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 40,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-11-01',
                'data_fim_vacinacao' => '2021-11-30',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 40,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-11-01',
                'data_fim_vacinacao' => '2021-11-30',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 35,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2021-12-01',
                'data_fim_vacinacao' => '2021-12-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 35,
                'numero_dose' => 2
            ],
            [
                'data_inicio_vacinacao' => '2021-12-01',
                'data_fim_vacinacao' => '2021-12-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Sul',
                'idade_minima' => 30,
                'numero_dose' => 1
            ],
            [
                'data_inicio_vacinacao' => '2022-01-01',
                'data_fim_vacinacao' => '2022-01-31',
                'uf' => 'DF',
                'cidade' => 'Brasília',
                'local_vacinacao' => 'Posto de Saúde Asa Norte',
                'idade_minima' => 30,
                'numero_dose' => 2
            ],
        ];

        foreach ($agendas as $agenda) {
            DB::table('agenda_vacinacao')->insert($agenda);
        }
        
    }
}
