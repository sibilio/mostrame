<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
   protected $table = "papeis";
   protected $fillable = ['descricao'];
}
