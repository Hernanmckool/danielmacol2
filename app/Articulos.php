<?php

namespace daniel;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    protected $table="articulos";

    protected $fillable= ['articulo','patch','status','id_categoria'];
}
