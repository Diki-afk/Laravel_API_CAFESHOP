<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{	
	//model MenuCategory mempresentasikan table category_menu pada class saya kliru penamaan seharusnya aturannya adalah urutan alfabet terlebi dahulu
    protected $table = 'category_menu';
    protected $fillable = [
    	'menu_id', 'category_id', 'status'
    ];//mengizinkan untuk operasi mass-assignment pada field2 yang tercantum diatas
}
