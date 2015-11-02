<?php

namespace daniel;

use Illuminate\Database\Eloquent\Model;
use DB;

class Secciones extends Model
{
    protected $table="secciones";

    protected $fillable= ['seccion','status'];

    public static function Count_secciones()
    {
        return DB::table('secciones')
            ->select('secciones.*')
            ->count();
    }

}
