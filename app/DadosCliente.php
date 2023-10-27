<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosCliente extends Model
{
    protected $fillable = ['nome','email','telefone'];
}
