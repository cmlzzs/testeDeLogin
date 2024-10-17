<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mdl_user extends Model
{
    // Especifica a conexão do banco de dados do Moodle
    protected $connection = 'moodle'; 

    // Define a tabela associada a este modelo (mdl_user no Moodle)
    protected $table = 'mdl_user';

    // Outros atributos e configurações podem ser definidos aqui, se necessário
}
