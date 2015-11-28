<?php

namespace daniel;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Pinturas extends Model
{
    protected $table = "pinturas"; 

    protected $fillable = ['titulo','resena','path','id_categoria','status'];
    
    public function setPathAttribute($path){
        if(!empty($path)){
            $name = Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['path'] = $name;
            \Storage::disk('otro')->put($name, \File::get($path));
        }
    }

    public static function Pinturas(){
    	return DB::table('pinturas')
    		->join('categorias','categorias.id','=','pinturas.id_categoria')
    		->select('pinturas.*','categorias.categoria')
    		->get();
    }

    public static function Pinturas_cat($id)
    {
        return DB::table('categorias')
            ->where('categorias.id','=',$id)
            ->where('categorias.status','=','1')
            ->select('categorias.*')
            ->get();
    }
    public static function Pinturas_id($id)
    {
        return DB::table('pinturas')
            ->where('pinturas.id_categoria','=',$id)
            ->where('pinturas.status','=','1')
            ->join('categorias','categorias.id','=','pinturas.id_categoria')
            ->select('pinturas.*','categorias.categoria')
            ->paginate(4);
    }
    public static function Count_pinturas()
    {
        return DB::table('pinturas')
            ->select('pinturas.*')
            ->count();
    }


}
