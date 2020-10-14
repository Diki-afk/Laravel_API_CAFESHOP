<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //function ini manampilkan data dalam bentuk json
        $parent = parent::toArray($request);
        //dapatkan category dengan id 1
        $category = Category::find(1);
        //lalu tambahkan menu dengan id dibawah kedalam id category diatas menggunakan ketentuan function menus() yang telah dideklarasikan di model category. menambahkan dengan function syncWithoutDetaching() yang menambahkan jika data tidak ada, dan tidak menambahkan jika data sudah ada. disini belum fleksible karena saya belum membuat manajemen backend.
        $category->menus()->syncWithoutDetaching([15,16]);
        $category = Category::find(2);
        $category->menus()->syncWithoutDetaching([9,10,17,18,19,20,21,22,23,24,25]);
        $category = Category::find(3);
        $category->menus()->syncWithoutDetaching([7,8,11,12,13,14]);
        $category = Category::find(4);
        $category->menus()->syncWithoutDetaching([9, 10]);
        $category = Category::find(5);
        $category->menus()->syncWithoutDetaching([17,18]);
        $category = Category::find(6);
        $category->menus()->syncWithoutDetaching([19,20]);
        $data['menus'] = $this->menus()->paginate(4);
        //ambil data menus yang berelasi dengan category menggunakan pivot tabel
        $data = array_merge($parent, $data);
        return [
            'status' => 'success',
            'message' => 'category data',
            'data' => $data
        ];


    }
}
