<?php
namespace mercado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
class Product extends Model
{
    protected $table = 'products';
	protected $fillable = ['name', 'slug', 'description', 'extract', 'image', 'visible', 'price', 'category_id'];
    
    public function setImageAttribute($image)
    {
        //$file=Input::file('image');
        //$name=$file->getClientOriginalName();
        //\Storage::disk('local')->put($name, \File::get($image));
        $name = Carbon::now()->second.$image->getClientOriginalName();
        $this->attributes['image'] = $name;
        \Storage::disk('local')->put($name, \File::get($image));
    }
    // 
    public function category()
    {
        return $this->belongsTo('mercado\Category');
    }
    // 
    public function order_item()
    {
        return $this->hasOne('mercado\OrderItem');
    }
}
