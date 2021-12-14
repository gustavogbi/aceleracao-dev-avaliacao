<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    use HasFactory;

    protected $table = 'doadores';
    protected $fillable = ['nome', 'telefone', 'email', 'peso', 'altura', 'fumante', 'doencas', 'observacoes'];
}
