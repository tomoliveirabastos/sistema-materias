<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaUser extends Model
{
    use HasFactory;

    protected $table = "materia_user";
    protected $fillable = [
        "materia_id",
        "user_id"
    ];
}
