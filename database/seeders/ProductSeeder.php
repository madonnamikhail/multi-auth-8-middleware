<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Product::factory(10)->create();
        DB::table('products')->insert([
            'name' => Str::random(10),
            'image' => Str::random(10).'@gmail.com',
        ]);

    }
}
