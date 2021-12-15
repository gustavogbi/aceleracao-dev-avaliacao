<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'grauDeEscolaridade', 'telefone', 'email'];
}
