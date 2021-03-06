<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoFinanceiro extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'desconto', 'observacao'];
    protected $table = 'planos_financeiros';
}