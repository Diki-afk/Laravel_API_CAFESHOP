<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Resources\Menus as MenuResourceCollection;
use App\Http\Resources\Menu as MenuResource;

class MenuController extends Controller
{


    public function top($count)
{
		$criteria = Menu::select('*')
			->orderBy('views', 'DESC')
			->limit($count)
			->get();
		return new MenuResourceCollection($criteria);
		//funtion ini menampilkan menu dengan perhitungan views terbanyak akan ditampilkan dan dibungkus dengan resource collection MenuResourceCollection
}
	public function index(){
		$criteria = Menu::paginate(4);
		return new MenuResourceCollection($criteria);
		//function ini menampilakan menu sebanyak 4 data per page dan dibungkus dengan resource collection MenuResourceCollection
	}

	public function slug($slug){
		$criteria = Menu::where('slug', $slug)->first();
		$criteria->views = $criteria->views+1;
		$criteria->save();
		return new MenuResource($criteria);
		//function ini mengembalikan data yang ada resource MenuResource, data pada resource ini adalah hasil many to many antara data category dan menu, jadi function ini menampilkan category sesuai parameter $slug menu serta menambah jumlah views sebanyak 1 setiap dipanggil data sesuai slug.
	}

	public function search($keyword){
		$criteria = Menu::select('*')
		->where('title', 'LIKE', "%".$keyword."%")
		->orderBy('views', 'DESC')
		->get();
		return new MenuResourceCollection($criteria);
		//function ini digunakan untuk fitur pencarian pada web sesuai title menu dan paling atas ditampilkan dengan view terbanyak.
	}
}
