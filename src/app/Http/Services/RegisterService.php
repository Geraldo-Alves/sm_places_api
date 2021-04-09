<?php

namespace App\Http\Services;

use App\Models\AgendaVacinacao;
use App\Models\User;
use App\Models\UsuarioAgenda;
use Carbon\Carbon;

/**
 * class RegisterService
 */
class RegisterService 
{

    public function register(array $params)
    {
        // Encripta a senha do usuario
        $params['password'] = bcrypt($params['password']);

        // Define o role do usuário
        $params['role'] = 'user';

        // Cria o novo usuario
        $user = User::create($params);
        
        // Obtêm seu token de acesso
        $accessToken = $user->createToken('authToken')->accessToken;

        // Cria o cadastro da agenda do usuario de acordo com a idade
        $today = Carbon::now();
        $birthDay = Carbon::createFromFormat('Y-m-d', $params['data_nascimento']);
        $yearsOld = $today->diffInYears($birthDay);

        // Obtêm a primeira vacinação compatível com a idade do usuário
        $agendaPrimeiraVacinacao = AgendaVacinacao::
            where('idade_minima', '<=', $yearsOld)
            ->where('numero_dose', 1)
            ->orderBy('idade_minima', 'DESC')
            ->first();

        // Obtêm a segunda vacinação compatível com a idade do usuário
        $agendaSegundaVacinacao = AgendaVacinacao::
            where('idade_minima', '<=', $yearsOld)
            ->where('numero_dose', 2)
            ->orderBy('idade_minima', 'DESC')
            ->first();


        // Agenda da primeira dose
        $usuarioAgenda = new UsuarioAgenda();
        $usuarioAgenda->user_id = $user->id;
        $usuarioAgenda->agenda_vacinacao_id = $agendaPrimeiraVacinacao->id;
        $usuarioAgenda->save();

        // Agenda da segunda dose
        $usuarioAgenda = new UsuarioAgenda();
        $usuarioAgenda->user_id = $user->id;
        $usuarioAgenda->agenda_vacinacao_id = $agendaSegundaVacinacao->id;
        $usuarioAgenda->save();

        $result = ['user' => $user, 'access_token' => $accessToken];
        return $result;
    }
}