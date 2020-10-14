<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	protected $dates = ['deleted_at'];
	
    protected $fillable = [
    	'name', 'slug', 'image', 'status'
    ]; //mengizinkan untuk operasi mass-assignment pada field2 yang tercantum diatas

    //function dibawah digunakan untuk relasi many to many antara table Menu dengan Table categories yang dihubungkan dengan pivot table category_menu jadi disini saya menggunakan function belongsToMany() karena relasi many to many
    public function menus(){
    	return $this->belongsToMany("App\Menu", "category_menu", 'category_id', 'menu_id');
    }
}
