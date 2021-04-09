<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioVacinacaoController extends Controller
{

    /**
     * Obtêm a agenda do usuario
     */
    public function agenda(Request $request) {
        $usuario = Auth::user();
        $agendasUsuario = $usuario->agenda;
        foreach ($agendasUsuario as $agenda) {
            $agenda->agendaVacinacao;
        }
        return $agendasUsuario;
    }
}