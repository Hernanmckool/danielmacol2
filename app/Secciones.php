<?php

namespace daniel;

use Illuminate\Database\Eloquent\Model;

class Secciones extends Model
{
    protected $table="secciones";

    protected $fillable= ['seccion','status'];
}
