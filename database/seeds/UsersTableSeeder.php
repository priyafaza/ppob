<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'Admin',
                'email'=>'admin@email.com',
                'email_verified_at'=>null,
                'password'=>bcrypt('jancokasu'),
                'remember_token'=>null,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
        ]);
    }
}
