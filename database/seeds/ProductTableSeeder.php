<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::truncate();
        \Illuminate\Support\Facades\DB::table('table_product')->insert([
            [
                'id' => 1,
                'nama'=>'Pulsa',
                'logo'=>'1.jpg',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id' => 2,
                'nama'=>'Listrik PLN',
                'logo'=>'2.jpg',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id' => 3,
                'nama'=>'PDAM',
                'logo'=>'3.jpg',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id' => 4,
                'nama'=>'Telkom / Indihome',
                'logo'=>'4.jpg',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id' => 5,
                'nama'=>'BPJS',
                'logo'=>'5.jpg',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id' => 6,
                'nama'=>'Voucher Game',
                'logo'=>'6.jpg',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id' => 7,
                'nama'=>'Transfer Uang',
                'logo'=>'7.jpg',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id' => 8,
                'nama'=>'Custom',
                'logo'=>'8.jpg',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
        ]);
    }
}
