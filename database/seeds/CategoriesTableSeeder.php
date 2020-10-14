<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
			'name' => 'Makanan',
			'slug' => 'makanan',
			'image' => 'https://images.unsplash.com/photo-1558467523-46113f1fcf72?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80',
			'status' => 'TERSEDIA',
		]);
		DB::table('categories')->insert(
		[
			'name' => 'Cold Drinks',
			'slug' => 'cold-drinks',
			'image' => 'https://images.unsplash.com/photo-1481671703460-040cb8a2d909?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80',
			'status' => 'TERSEDIA',
		]);
		DB::table('categories')->insert([
			'name' => 'Camilan',
			'slug' => 'camilan',
			'image' => 'https://images.unsplash.com/photo-1526865906320-0200a6e2c7f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=375&q=80',
			'status' => 'TERSEDIA',
		]);
		DB::table('categories')->insert(
		[
			'name' => 'Coffee',
			'slug' => 'coffee',
			'image' => 'https://images.unsplash.com/photo-1497515114629-f71d768fd07c?ixlib=rb-1.2.1&auto=format&fit=crop&w=762&q=80',
			'status' => 'TERSEDIA',
		]);
		DB::table('categories')->insert(
		[
			'name' => 'Tea',
			'slug' => 'tea',
			'image' => 'https://images.unsplash.com/photo-1521012012373-6a85bade18da?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80',
			'status' => 'TERSEDIA',
		]);
		DB::table('categories')->insert(
		[
			'name' => 'Chocolate',
			'slug' => 'chocolate',
			'image' => 'https://images.unsplash.com/photo-1588329955273-2a615fde5913?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
			'status' => 'TERSEDIA',
		]);
    }
}
