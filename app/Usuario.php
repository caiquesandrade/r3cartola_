<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ["nome", "celular", "email", "cpf", "password", "time"];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = "usuarios";
}
