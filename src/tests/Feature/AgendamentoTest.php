<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class AgendamentoTest extends TestCase
{

    /**
     * Teste do retorno do status da requisição de alteração de status do agendamento
     */
    public function testStatusAlteracaoAgendamento()
    {
        $admin = new User();
        $admin->email = "admin@admin.com";
        $admin->name = "admin";
        $admin->id = 1;
        $adminToken = $admin->createToken('authToken')->accessToken;

        $response = $this->json(
            'PATCH', 
            '/api/admin/agendamento/1', 
            ['aplicada' => 1], 
            ['Authorization' => "Bearer " . $adminToken]
        );
        $response->assertStatus(200);
    }

    /**
     * Teste do objeto de retorno da requisição de alteração de status do agendamento para aplicada = 1
     */
    public function testObjetoRetornoAlteracaoAgendamentoAplicada()
    {
        $admin = new User();
        $admin->email = "admin@admin.com";
        $admin->name = "admin";
        $admin->id = 1;
        $adminToken = $admin->createToken('authToken')->accessToken;

        $response = $this->json(
            'PATCH', 
            '/api/admin/agendamento/1', 
            ['aplicada' => 1], 
            ['Authorization' => "Bearer " . $adminToken]
        );
        $response->assertJsonFragment([
            'aplicada' => 1,
        ]);
    }

    /**
     * Teste do objeto de retorno da requisição de alteração de status do agendamento para aplicada = 0
     */
    public function testObjetoRetornoAlteracaoAgendamentoNaoAplicada()
    {
        $admin = new User();
        $admin->email = "admin@admin.com";
        $admin->name = "admin";
        $admin->id = 1;
        $adminToken = $admin->createToken('authToken')->accessToken;

        $response = $this->json(
            'PATCH', 
            '/api/admin/agendamento/1', 
            ['aplicada' => 0], 
            ['Authorization' => "Bearer " . $adminToken]
        );
        $response->assertJsonFragment([
            'aplicada' => 0,
        ]);
    }
}
