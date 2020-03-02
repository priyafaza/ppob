<?php

use Illuminate\Database\Seeder;

class PelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Pelanggan::truncate();
        Illuminate\Support\Facades\DB::table('table_pelanggan')->insert([
            [
                'id' => 1,
                'nama'=>'Bambang Susanto',
                'foto'=>'gendon.jpg',
                'no_hp'=>'6285236140378',
                'alamat'=>'Plampangrejo',
                'username'=>'Mas Gendon',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id' => 2,
                'nama'=>'Mudzrikatin Nuris',
                'foto'=>'kecomel.jpg',
                'no_hp'=>'6285719810023',
                'alamat'=>'Tapanrejo',
                'username'=>'Kecomel',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id' => 3,
                'nama'=>'Rohmad Syahid',
                'foto'=>'sahid.jpg',
                'no_hp'=>'6285203849401',
                'alamat'=>'Plampangrejo',
                'username'=>'Mas Sahid',
                'status'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
        ]);
    }
}
