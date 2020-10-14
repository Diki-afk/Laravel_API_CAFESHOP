<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Menu extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //menampilkan data jika data success pada api dalam bentuk json yang nantinya disesuaikan pada controller
        $parent = parent::toArray($request);
        $data['categories'] = $this->categories()->paginate(4);
        //ambil data menus yang berelasi dengan category menggunakan pivot tabel
        $data = array_merge($parent, $data);
        return [
            'status' => 'success',
            'message' => 'menu data',
            'data' => $data,
        ];
    }
}
