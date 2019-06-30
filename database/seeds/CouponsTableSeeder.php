<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'name' => 'Hello World',
            'image' => 'https://laraweb.net/wp-content/uploads/2016/08/hello-world.png',
            'description' => 'Hello World description',
            'point' => '100',
            'expire' => '1562307843',
            'release_at' => '1561897443',
            'close_at' => '1564489443',
        ];
        DB::Table('coupons')->insert($params);

        $params = [
            'name' => 'Hello World2',
            'image' => 'https://laraweb.net/wp-content/uploads/2016/08/hello-world.png',
            'description' => 'Hello World description2',
            'point' => '200',
            'expire' => '1562307843',
            'release_at' => '1561897443',
            'close_at' => '1564489443',
        ];
        DB::Table('coupons')->insert($params);

    }
}

