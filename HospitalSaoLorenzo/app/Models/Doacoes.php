<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacoes extends Model
{
    use HasFactory;

    
    protected $table = 'doacoes';
    protected $fillable = ['nome', 'telefone', 'email', 'qtd_litros'];
}
