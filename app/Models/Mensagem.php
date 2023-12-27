<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;

    protected $table = "mensagem";

    protected $fillable = [
        "mensagem",
        "nascimento",
        "whatsapp",
        "resposta",
        "cidade",
        "estado",
        "materia_id",
        "nome_do_aluno",
        "status",
    ];
}
