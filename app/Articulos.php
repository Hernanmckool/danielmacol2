<?php

namespace daniel;

use Illuminate\Database\Eloquent\Model;
use DB;

class Articulos extends Model
{
    protected $table="articulos";

    protected $fillable= ['articulo','patch','status','id_categoria','titulo'];


    public static function Articulos()
    {
        return DB::table('articulos')
            ->join('categorias','categorias.id','=','articulos.id_categoria')
            ->select('articulos.*','categorias.categoria')
            ->get();
    }

}
