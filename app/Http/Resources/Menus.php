<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Menus extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //menampilkan data dengan function toArray() pada api dalam bentuk json yang nantinya disesuaikan pada controller atau digunakan untuk membungkus data pada contoller
        return [
            'status' => 'success',
            'message' => 'menu data',
            'data'     => parent::toArray($request),
        ];
    }
}
