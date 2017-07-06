<?php

namespace mercado;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table='categories';
    protected $fillable=['name','slug','description','color'];
    public $timestamps=false;
    public function products(){
    	return $this->hasMany('mercado\product');
    }
}
