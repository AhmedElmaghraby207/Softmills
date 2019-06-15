<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'name' => 'Laptop',
            'price' => '5000',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Car',
            'price' => '100000',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Mobile',
            'price' => '3000',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Book',
            'price' => '200',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Computer',
            'price' => '7000',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'TV',
            'price' => '4000',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Printer',
            'price' => '2500',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Battery',
            'price' => '150',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Mouse',
            'price' => '70',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Keyboard',
            'price' => '80',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'VR',
            'price' => '300',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Glasses',
            'price' => '200',
        ]);
        $product->save();


    }
}
