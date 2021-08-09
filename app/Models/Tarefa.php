<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    // O Eloquent ORM já assume que já contenha estas informações, mas caso não tenha poderá declarar
    // protected $table = 'tarefas';
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    // protected $keyType = 'string';
    // const CREATED_AT = 'date_created';
    // const UPDATE_AT = 'date_created';

    public $timestamps = false;

}
