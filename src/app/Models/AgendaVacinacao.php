<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaVacinacao extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $table = "agenda_vacinacao";

    protected $filleble = [
        'data_inicio_vacinacao',
        'data_fim_vacinacao',
        'uf',
        'cidade',
        'local_vacinacao',
        'idade',
        'numero_dose'
    ];

    public $timestamps = false;
}
