<?php

namespace daniel;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categorias extends Model
{
    protected $table="categorias";

    protected $fillable= ['categoria','status','id_seccion'];

    public static function Categorias_id($id)
    {
        return DB::table('categorias')
            ->where('categorias.id','=',$id)
            ->join('secciones','secciones.id','=','categorias.id_seccion')
            ->select('categorias.*','secciones.seccion')
            ->get();
    }

    public static function Categorias()
    {
        return DB::table('categorias')
            ->join('secciones','secciones.id','=','categorias.id_seccion')
            ->select('categorias.*','secciones.seccion')
            ->get();
    }
    public static function Count_categorias()
    {
        return DB::table('categorias')
            ->select('categorias.*')
            ->count();
    }

} 
