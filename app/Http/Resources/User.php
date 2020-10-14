<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //menampilkan data dengan function toAraay() pada api dalam bentuk json yang nantinya disesuaikan pada controller atau digunakan untuk membungkus data pada contoller
        return parent::toArray($request);
    }
}
