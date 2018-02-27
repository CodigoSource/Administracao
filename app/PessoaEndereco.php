<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaEndereco extends Model
{
    protected $fillable = [
        'cep', 'bairro', 'cidade', 'rua', 'numero', 'uf', 'adicional', 'pessoa'
    ];
}
