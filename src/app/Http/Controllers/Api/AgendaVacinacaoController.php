<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AgendaVacinacao;
use App\Models\UsuarioAgenda;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AgendaVacinacaoController extends Controller
{
    public function index(Request $request) {
        $filter = $request->all();
        if (sizeof($filter)) {
            return AgendaVacinacao::where($filter)->get();
        }
       
        return AgendaVacinacao::all();
    }

   public function agendamentos(Request $request)
    {
        $filter = $request->all();
        
        $users = DB::table('users')
            ->select([
                    'usuario_agenda.id as usuario_agenda_id',
                    'users.name', 
                    'usuario_agenda.user_id', 
                    'usuario_agenda.aplicada',
                    'agenda_vacinacao.idade_minima',
                    'agenda_vacinacao.data_inicio_vacinacao',
                    'agenda_vacinacao.data_fim_vacinacao',
                ]
            )
            ->join('usuario_agenda', 'users.id', '=', 'usuario_agenda.user_id')
            ->join('agenda_vacinacao', 'agenda_vacinacao.id', '=', 'usuario_agenda.agenda_vacinacao_id');

        if (sizeof($filter)) {
            if (isset($filter['aplicada'])) {
                $users
                    ->where('usuario_agenda.aplicada', $filter['aplicada']);
            }
            if (isset($filter['idade_minima'])) {
                $users
                    ->where('agenda_vacinacao.idade_minima', '>=', $filter['idade_minima']);
            }
        }

        return $users->get();
    }

    public function updateAgendamento(Request $request, $idAgendamento)
    {
        $params = $request->all();
        $agendamento = UsuarioAgenda::find($idAgendamento);
        
        foreach ($params as $name => $param) {
            if ($name === 'aplicada') {
                $agendamento->aplicada = $param;
            }
        }

        $agendamento->save();
        return $agendamento;
    }
}