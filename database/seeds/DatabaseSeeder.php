<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //digunakan agar bisa menggenerate seluruh seeder yang ada pada direktori seeder, materi tentang seeder dapat dibaca pada dokumentasi laravel. 
        $this->call(CategoriesTableSeeder::class);
        $this->call(MenuTableSeeder::class);
    }
}
