<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Services\RegisterService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    /**
     * @var RegisterService
     */
    private $registerService;

    function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    /**
     * Método para registro de novos usuarios
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), 
            $this->registerRules(), 
            $this->registerErrorMessages()
        );

        if ($validator->fails()) {
            return $validator->getMessageBag();
        }

        $validatedData = $request->all();

        return $this->registerService->register($validatedData);
    }

    /**
     * Método para autenticação do usuário
     */
    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['user' => auth()->user(), 'access_token' => $accessToken]);
    }

    public function registerRules()
    {
        return [
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'data_nascimento' => 'required|date'
        ];
    }

    public function registerErrorMessages()
    {
        return [
            'name.required' => 'É necessário informar o Nome de Usuário',
            'name.max' => 'O nome deve ter no máximo 55 caracteres',
            'email.required' => 'É necessário informar o Email de Usuário',
            'password.required' => 'É necessário informar a Senha do Usuário',
            'password.confirmed' => 'A confirmação de senha e a senha não conferem',
            'password_confirmation.required' => 'É necessário informar a Data de Nascimento a confirmação de senha',
            'data_nascimento.required' => 'É necessário informar a Data de Nascimento',
            'data_nascimento.date' => 'A Data de Nascimento está incorreta',
        ];
    }
}
