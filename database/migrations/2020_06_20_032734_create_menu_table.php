<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //menambahan skema table menu pada database serta menambahkan field2 atau column pada table 
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');//primary_key
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('cover')->nullable();
            $table->float('price')->unsigned()->default(0);
            $table->integer('views')->unsigned()->default(0);
            $table->enum('status', ['TERSEDIA', 'HABIS'])->default('TERSEDIA');
            $table->timestamps(); //created_at and update_at
            $table->softDeletes(); //delete_at
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('delete_by')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //menghapus schema table menu jika ada pada database ketika dijalankan perintah php artisan migrate
        Schema::dropIfExists('menu');
    }
}
