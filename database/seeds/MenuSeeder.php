<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
			'title' => 'Roti Bakar',
			'slug' => 'roti-bakar',
			'description' => 'Roti bakar yang disajikan dengan ciri khas yang diolesi dengan margarin yang berkualitas dan ditaburi deng keju mozarella',
			'cover' => 'https://foodizz.id/blog/wp-content/uploads/2019/05/Roti-Bakar-Feature-Image.png',
			'price' => 10000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Risoles',
			'slug' => 'risoles',
			'description' => 'Pastri berisi daging, biasanya daging cincang, dan sayuran yang dibungkus dadar, dan digoreng setelah dilapisi tepung panir dan kocokan telur ayam',
			'cover' => 'https://www.tokomesin.com/wp-content/uploads/2015/08/risoles-tokomesin.jpg',
			'price' => 6000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Cappucino',
			'slug' => 'cappucino',
			'description' => 'Minuman khas Italia yang terdiri dari 1/3 espresso, 1/3 susu steamed, dan 1/3 buih susu',
			'cover' => 'https://img.kurio.network/x3DmOgRv9V16ZdWYT4gtRaYjS2s=/700x350/filters:quality(80):format(jpeg)/https://kurio-img.kurioapps.com/19/05/28/50de339f-7e20-4738-b9a4-a2ba49991add.jpg',
			'price' => 9000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Moccacino',
			'slug' => 'moccacino',
			'description' => 'Minuman yang terdiri dari bahan berupa susu, kopi dan cokelat. Kopi yang digunakan biasanya jenis espresso yaitu kopi hitam',
			'cover' => 'https://images.unsplash.com/photo-1569564358211-b7dee0e568d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 9000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'French Fries',
			'slug' => 'french-fries',
			'description' => 'potongan-potongan kentang berkualitas yang digoreng dalam minyak goreng panas',
			'cover' => 'https://images.unsplash.com/photo-1491449347753-6b0223fb6931?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 5000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Siomay',
			'slug' => 'siomay',
			'description' => 'berbentuk bulat pihih dan diberi garnish bersupa telur kepiting, daging sapi, parutan wortel, dan kacang polong',
			'cover' => 'https://images.unsplash.com/photo-1551638059-d1fb82606c4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 8000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Nachos',
			'slug' => 'nachos',
			'description' => ' Makanan dari Meksiko, keripik tortilla yang disiram dengan keju cair dan ditebari cabe jalapeno(cabe asli Meksiko)',
			'cover' => 'https://images.unsplash.com/photo-1582169296194-e4d644c48063?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 10000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Chicken Fingers',
			'slug' => 'chicken-fingers',
			'description' => 'hicken fingers adalah jenis ayam goreng yang amat popular yang disajikan potongan ayam tanpa tulang yang berkualitas',
			'cover' => 'https://images.unsplash.com/photo-1548340748-6d2b7d7da280?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 10000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Fried Rice',
			'slug' => 'fried-rice',
			'description' => 'nasi yang digoreng dan diaduk dalam minyak goreng atau margarin, biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya, seperti telur, ayam, udang, dan kerupuk',
			'cover' => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 12000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Fried Noodles',
			'slug' => 'mie-goreng',
			'description' => 'Mi goreng merupakan salah satu masakan yang digemari oleh berbagai lapisan masyarakat, usia, dan jenis kelamin karena rasanya yang dapat diterima oleh kebanyakan orang yang disajikan dengan berbagai toping mulai dari ayam, sayur, dan udang',
			'cover' => 'https://images.unsplash.com/photo-1585032226651-759b368d7246?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=897&q=80',
			'price' => 12000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Black Tea',
			'slug' => 'black-tea',
			'description' => 'Teh yang memiliki aroma dan rasa yang paling kuat , teh yang sangat berkualitas',
			'cover' => 'https://images.unsplash.com/photo-1557928001-a3cb59b9036f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 8000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Green Tea',
			'slug' => 'green-tea',
			'description' => 'Teh yang dibuat dari daun tanaman teh (Camellia sinensis) yang dipetik dan mengalami proses pemanasan untuk mencegah oksidas',
			'cover' => 'https://images.unsplash.com/photo-1547318114-eff5ea85ede9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80',
			'price' => 8000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Chocolate Oreo',
			'slug' => 'chocolate-oreo',
			'description' => '',
			'cover' => 'https://images.unsplash.com/photo-1528740096961-3798add19cb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 9000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Chocolate Cream',
			'slug' => 'chocolate-cream',
			'description' => 'Minuman coklat yang dibuat dari coklat asli dan berkualitas yang dicampur dengan oreo, dan memiliki rasa yang sangat dapat mengobati sakit hati',
			'cover' => 'https://images.unsplash.com/photo-1586985288206-3cdc4f67cd03?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 9000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Strawberry Juice',
			'slug' => 'strawberry-juice',
			'description' => 'Jus strawberry yang disajikan dari strawberry yang berkualitas dicampur dengan susu sapi pilihan',
			'cover' => 'https://images.unsplash.com/photo-1589733955941-5eeaf752f6dd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80',
			'price' => 7000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Orange Juice',
			'slug' => 'orange-juice',
			'description' => 'Jus jeruk yang disajikan dari jeruk yang berkualitas dicampur dengan susu sapi pilihan',
			'cover' => 'https://images.unsplash.com/photo-1556063230-aa38680c8142?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80',
			'price' => 7000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Soda',
			'slug' => 'soda',
			'description' => 'minuman bersoda yang menyegarkan pikiran dan dahaga dalam diri',
			'cover' => 'https://images.unsplash.com/photo-1517959105821-eaf2591984ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80',
			'price' => 7500,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Cocktails',
			'slug' => 'cocktails',
			'description' => 'Minuman bersoda yang dicampur dengan minuman atau bahan-bahan lain yang beraroma',
			'cover' => 'https://images.unsplash.com/photo-1560963689-b5682b6440f8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 11000,
			'status' => 'TERSEDIA',
		]);
		DB::table('menus')->insert(
		[
			'title' => 'Avocado Juice',
			'slug' => 'avocado-juice',
			'description' => 'Jus alpukat yang disajikan dari alpukat yang berkualitas dicampur dengan susu sapi dan coklat  pilihan',
			'cover' => 'https://images.unsplash.com/photo-1543648973-1eb94629e7a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60',
			'price' => 8000,
			'status' => 'TERSEDIA',
		]);
    }
}
