<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $dates = ['deleted_at'];
    protected $fillable = [
    	'title', 'slug', 'description', 'cover', 'price', 'status'
    ];//mengizinkan untuk operasi mass-assignment pada field2 yang tercantum diatas

    //function dibawah digunakan untuk relasi many to many antara table Menu dengan Table categories yang dihubungkan dengan pivot table category_menu jadi disini saya menggunakan function belongsToMany() karena relasi many to many
    public function categories(){
    	return $this->belongsToMany('App\Category',"category_menu",'menu_id', 'category_id');
    }
}
