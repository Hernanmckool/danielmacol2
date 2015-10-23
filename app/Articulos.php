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
    public static function Articulos_id($id)
    {
        return DB::table('articulos')
            ->where('articulos.id_categoria','=',$id)
            ->join('categorias','categorias.id','=','articulos.id_categoria')
            ->select('articulos.*','categorias.categoria')
            ->get();
    }

    public static function Articulos_id_edit($id)
    {
        return DB::table('articulos')
            ->where('articulos.id','=',$id)
            ->join('categorias','categorias.id','=','articulos.id_categoria')
            ->select('articulos.*','categorias.categoria')
            ->get();
    }

    public static function Articulos_cat($id)
    {
        return DB::table('articulos')
            ->where('articulos.id_categoria','=',$id)
            ->join('categorias','categorias.id','=','articulos.id_categoria')
            ->select( DB::raw('DISTINCT(categoria)') )
            ->get();
    }

    public static function Articulos_ids($id)
    {
        return DB::table('articulos')
            ->where('articulos.id','=',$id)
            ->select('articulos.*')
            ->get();
    }


}
