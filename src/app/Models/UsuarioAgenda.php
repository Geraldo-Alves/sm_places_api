<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioAgenda extends Model
{
    use HasFactory;

    protected $table = "usuario_agenda";
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'agenda_vacinacao_id'
    ];

    public function User() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function agendaVacinacao()
    {
        return $this->belongsTo(AgendaVacinacao::class);
    }

}
