<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['aporte', 'nome', 'idade', 'sexo', 'idade_aposentado', 'renda_atual', 'final_desejado', 'contribuicao_mensal', 'perfil', 'valor_acumulado', 'reservaEst'];
}
