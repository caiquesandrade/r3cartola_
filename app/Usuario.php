<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        "nome", "celular" "email", "cpf", "password", "time"
    ];

    protected $table = "usuarios";
}
