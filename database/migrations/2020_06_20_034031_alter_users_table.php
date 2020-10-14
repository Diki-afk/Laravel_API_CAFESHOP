<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //mengubah/menambah field pada table users jadi menggunakan fungsi table serta membuat/menambahkan field2/column2
        Schema::table('users', function (Blueprint $table) {
            $table->text('roles')->nullabel();
            $table->string('phone')->nullabel();
            $table->string('avatar')->nullabel();
            $table->enum('status', ['ACTIVE'], 'INACTIVE')->default('ACTIVE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //menghapus field2 dibawah jika ada pada database
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("roles");
            $table->dropColumn("phone");
            $table->dropColumn("avatar");
            $table->dropColumn("status");
        });
    }
}
