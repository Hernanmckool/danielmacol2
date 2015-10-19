<?php

namespace daniel;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table="categorias";

    protected $fillable= ['categoria','status','id_seccion'];

}
