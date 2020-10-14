<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //membuat schema table pivot yang digunakan untuk relasi many to many antara table menu dan categories dengan manambahkan field dari category_id dan menu_id
        Schema::create('menu_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id');
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //menghapus schema table menu_category jika sudah ada pada database 
        Schema::dropIfExists('menu_category');
    }
}
