<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\MenuCategory;
use App\Http\Resources\Categories as CategoryResourceCollection;
use App\Http\Resources\Category as CategoryResource;

class CategoryController extends Controller
{

	public function index() {
		$criteria = Category::paginate(4);//menambpilkan data category sebanyak 4 dalam satu halaman
		return new CategoryResourceCollection($criteria);//ketika mengembalikan data, data akan dibungkus dengan resource collection CategoryResourceCollection supaya format data standart dapat dilihat diatasi pada use App\Http\Resources\Categories as CategoryResourceCollection;
	}

    public function random($count) {
        //function ini akan mengembalikan data category secara random dengan jumlah parameter $count yang dikirimkan saat fungsi ini dipanggil
        $criteria = Category::select('*')
            ->inRandomOrder()
            ->limit($count)
            ->get();        
        return new CategoryResourceCollection($criteria);//ketika mengembalikan data, data akan dibungkus dengan resource collection CategoryResourceCollection supaya format data standart dapat dilihat diatasi pada use App\Http\Resources\Categories as CategoryResourceCollection; 
    }

    public function show($id){
    	return new CategoryResource(Category::find($id));
        //function ini mengembalikan data yang ada CategoryResource data pada resource ini adalah hasil many to many antara data category dan menu, dengan parameter $id dari category
    }

    public function slug($slug)
    {
    	$criteria = Category::where('slug', $slug)->first();
    	return new CategoryResource($criteria);
        //function ini mengembalikan data sebanyak 4 page data menu yang berelasi dengan category sesuai yang ada CategoryResource data pada resource ini adalah hasil many to many antara data category dan menu, jadi function ini menampilkan menu sesuai parameter $slug category 
    }
}
