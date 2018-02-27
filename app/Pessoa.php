<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome', 'email', 'emailsec', 'telefone', 'celular', 'cpfcnpj', 'registro', 'complemento', 'sexo', 'ehcliente', 'ehfornecedor', 'ehfuncionario'
    ];
}
